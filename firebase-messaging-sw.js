importScripts('https://www.gstatic.com/firebasejs/9.14.0/firebase-app-compat.js');
importScripts('https://www.gstatic.com/firebasejs/9.14.0/firebase-messaging-compat.js');
const firebaseConfig = {
  apiKey: "AIzaSyBHFDspXtIYacX7HeufKH_lxMaerEJVZx8",
  authDomain: "notifction-taj.firebaseapp.com",
  projectId: "notifction-taj",
  storageBucket: "notifction-taj.appspot.com",
  messagingSenderId: "431793942274",
  appId: "1:431793942274:web:14a554d12357b510fc1c1b",
  measurementId: "G-DM2LKC4WVC"
};

// Initialize Firebase
const app = firebase.initializeApp(firebaseConfig)
const messaging = firebase.messaging();
messaging.onBackgroundMessage(function (payload) {
  // Customize notification here
  const notificationTitle = payload.data.title;
  const notificationOptions = {
    body: payload.data.body,
    icon: payload.data.icon,
    image: payload.data.image
  };

  self.registration.showNotification(notificationTitle, notificationOptions);
  self.addEventListener('notificationclick', function(event) {
    const clickedNotification = event.notification;
    clickedNotification.close();
    event.waitUntil(
      clients.openWindow(payload.data.click_action)
    );
  });
});