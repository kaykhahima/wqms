<!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-app.js"></script>

<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
<script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-analytics.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-firestore.js"></script>

<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyDmStshj5uoxpAt4jMElubg6F3dOaQ0MtQ",
        authDomain: "wqms-e26bc.firebaseapp.com",
        databaseURL: "https://wqms-e26bc-default-rtdb.firebaseio.com",
        projectId: "wqms-e26bc",
        storageBucket: "wqms-e26bc.appspot.com",
        messagingSenderId: "415012463769",
        appId: "1:415012463769:web:a4007fbaa253e96c998408",
        measurementId: "G-MFW604W8YS"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();

</script>
