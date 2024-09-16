<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-messaging.js"></script>
<script>

    $(document).ready(function () {
        initFirebase();
    });
    var firebaseConfig = {
        apiKey: "AIzaSyC-ZMxhGXQzkUr8ilSWSzT_NzLbIG-su8U",
        authDomain: "zentune-web-and-apps.firebaseapp.com",
        projectId: "zentune-web-and-apps",
        storageBucket: "zentune-web-and-apps.appspot.com",
        messagingSenderId: "135504903145",
        appId: "1:135504903145:web:74e69460080c8798f02978",
        measurementId: "G-D80CQ5W0L4"
    };
    firebase.initializeApp(firebaseConfig);
    var get_url = $('#base_url').val();
    const messaging = firebase.messaging();

    function initFirebase() {
        messaging.requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function (token) {
                // console.log(token);
                var get_token = localStorage.getItem('fcm_token');
                // console.log(get_token);
                // if (get_token == null)
                // {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{ route('notification.save-token') }}',
                    type: 'POST',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        // console.log(response)
                        localStorage.removeItem('fcm_token')
                        localStorage.setItem('fcm_token', token)
                        // console.log('Token saved successfully.');
                    },
                    error: function (err) {
                        console.log('User Chat Token Error' + err);
                    },
                });
                // }
            }).catch(function (err) {
            console.log('User Chat Token Error' + err);
        });
    }

    messaging.onMessage(function (payload) {
        const noteTitle = payload.notification.title;
        console.log(payload.data);
        const noteOptions = {
            body: payload.notification.body,
            icon: payload.notification.icon,
            image: payload.notification.image,
        };
        new Notification(noteTitle, noteOptions);

        self.addEventListener('notificationclick', function (event) {
            event.notification.close();
            console.log('test click event');
            event.waitUntil(self.clients.openWindow('#'));
        });
        // self.addEventListener('notificationclick', function(event) {
        //     event.notification.close();
        //     event.waitUntil(
        //         clients.openWindow(event.notification.data.url)
        //     );
        // });
    });
</script>
