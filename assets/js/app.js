document.addEventListener('DOMContentLoaded', () => {
    const applicationServerKey =
        'BMwM8OVfJ-uDlKQTjA4E0NEL2ZiiUAD0zm5cQx3UIGcFj-kQ5d4BpRcUl20_YeO-zhkT6Kep8pxwMiAdmIvEcnA';

    let isPushEnabled = false;

    const pushButton = document.querySelector('#push-subscription-button');
    if (!pushButton) {
        return;
    }

     push_subscribe();

   
    if (!('serviceWorker' in navigator)) {
        console.warn('Service workers are not supported by this browser');
        changePushButtonState('incompatible');
        return;
    }

    if (!('PushManager' in window)) {
        console.warn('Push notifications are not supported by this browser');
        changePushButtonState('incompatible');
        return;
    }

    if (!('showNotification' in ServiceWorkerRegistration.prototype)) {
        console.warn('Notifications are not supported by this browser');
        changePushButtonState('incompatible');
        return;
    }

    // Check the current Notification permission.
    // If its denied, the button should appears as such, until the user changes the permission manually
    if (Notification.permission === 'denied') {
        console.warn('Notifications are denied by the user');
        changePushButtonState('incompatible');
        return;
    }
    var base_url = '<?php echo base_url(); ?>';
    
    navigator.serviceWorker.register('https://celnow.com/serviceWorker.js').then(
        () => {
            console.log('[SW] Service worker has been registered');
           
        },
        e => {
            console.error('[SW] Service worker registration failed', e);
            changePushButtonState('incompatible');
        }
    );

    function changePushButtonState(state) {
        switch (state) {
            case 'enabled':
                //   pushButton.disabled = false;
                document.getElementById('push-subscription-button').textContent = 'Disable Push notifications';
                isPushEnabled = true;
                break;
            case 'disabled':
                //   pushButton.disabled = false;
                document.getElementById('push-subscription-button').textContent = 'Enable Push notifications';
                isPushEnabled = false;
                break;
            case 'computing':
                //   pushButton.disabled = true;
                document.getElementById('push-subscription-button').textContent = 'Loading...';
                break;
            case 'incompatible':
                //   pushButton.disabled = true;
                document.getElementById('push-subscription-button').textContent = 'Push notifications are not compatible with this browser';
                break;
            default:
                console.error('Unhandled push button state', state);
                break;
        }
    }

    function urlBase64ToUint8Array(base64String) {
        const padding = '='.repeat((4 - (base64String.length % 4)) % 4);
        const base64 = (base64String + padding).replace(/\-/g, '+').replace(/_/g, '/');

        const rawData = window.atob(base64);
        const outputArray = new Uint8Array(rawData.length);

        for (let i = 0; i < rawData.length; ++i) {
            outputArray[i] = rawData.charCodeAt(i);
        }
        return outputArray;
    }

    function checkNotificationPermission() {
        return new Promise((resolve, reject) => {
            if (Notification.permission === 'denied') {
                return reject(new Error('Push messages are blocked.'));
            }

            if (Notification.permission === 'granted') {
                return resolve();
            }

            if (Notification.permission === 'default') {
                return Notification.requestPermission().then(result => {
                    if (result !== 'granted') {
                        reject(new Error('Bad permission result'));
                    } else {
                        resolve();
                    }
                });
            }

            return reject(new Error('Unknown permission'));
        });
    }

    function push_subscribe() {
        changePushButtonState('computing');

        return checkNotificationPermission()
            .then(() => navigator.serviceWorker.ready)
            .then(serviceWorkerRegistration =>
                serviceWorkerRegistration.pushManager.subscribe({
                    userVisibleOnly: true,

                    applicationServerKey: urlBase64ToUint8Array(applicationServerKey),

                }))

        .then(subscription => {
                // Subscription was successful
                // create subscription on your server
                return push_sendSubscriptionToServer(subscription, 'POST');
            })
            .then(subscription => subscription && changePushButtonState('enabled')) // update your UI
            .catch(e => {
                if (Notification.permission === 'denied') {
                    // The user denied the notification permission which
                    // means we failed to subscribe and the user will need
                    // to manually change the notification permission to
                    // subscribe to push messages
                    console.warn('Notifications are denied by the user.');
                    changePushButtonState('incompatible');
                } else {
                    // A problem occurred with the subscription; common reasons
                    // include network errors or the user skipped the permission
                    console.error('Impossible to subscribe to push notifications', e);
                    changePushButtonState('disabled');
                }
            });
    }



    function push_unsubscribe() {
        changePushButtonState('computing');

        // To unsubscribe from push messaging, you need to get the subscription object
        navigator.serviceWorker.ready
            .then(serviceWorkerRegistration => serviceWorkerRegistration.pushManager.getSubscription())
            .then(subscription => {
                // Check that we have a subscription to unsubscribe
                if (!subscription) {
                    // No subscription object, so set the state
                    // to allow the user to subscribe to push
                    changePushButtonState('disabled');
                    return;
                }

                // We have a subscription, unsubscribe
                // Remove push subscription from server
                return push_sendSubscriptionToServer(subscription, 'DELETE');
            })
            .then(subscription => subscription.unsubscribe())
            .then(() => changePushButtonState('disabled'))
            .catch(e => {
                // We failed to unsubscribe, this can lead to
                // an unusual state, so  it may be best to remove
                // the users data from your data store and
                // inform the user that you have done so
                console.error('Error when unsubscribing the user', e);
                changePushButtonState('disabled');
            });
    }

    function push_sendSubscriptionToServer(subscription, method) {
        console.log(subscription);
        const key = subscription.getKey('p256dh');
        const token = subscription.getKey('auth');
        const contentEncoding = (PushManager.supportedContentEncodings || ['aesgcm'])[0];
         var fetchUrl = 'https://celnow.com/welcome/push_subscription';
                              
        return fetch(fetchUrl,{
            method,
            body: JSON.stringify({
                endpoint: subscription.endpoint,
                publicKey: key ? btoa(String.fromCharCode.apply(null, new Uint8Array(key))) : null,
                authToken: token ? btoa(String.fromCharCode.apply(null, new Uint8Array(token))) : null,
                contentEncoding,
            }),
        }).then(() => subscription);
    }

    /**
     * START send_push_notification
     * this part handles the button that calls the endpoint that triggers a notification
     * in the real world, you wouldn't need this, because notifications are typically sent from backend logic
     */

    const sendPushButton = document.querySelector('#send-push-button');
    if (!sendPushButton) {
        return;
    }

    sendPushButton.addEventListener('click', () =>
        navigator.serviceWorker.ready
        .then(serviceWorkerRegistration => serviceWorkerRegistration.pushManager.getSubscription())
        .then(subscription => {
            if (!subscription) {
                alert('Please enable push notifications');
                return;
            }

            const contentEncoding = (PushManager.supportedContentEncodings || ['aesgcm'])[0];
            const jsonSubscription = subscription.toJSON();
            fetch('send_push_notification', {
                method: 'POST',
                body: JSON.stringify(Object.assign(jsonSubscription, { contentEncoding })),
            });
        })
    );
    /**
     * END send_push_notification
     */
});