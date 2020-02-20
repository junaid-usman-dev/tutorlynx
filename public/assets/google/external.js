

//--------------------------------------------------------------------------------------------------------
//                 Facebook Integration
//--------------------------------------------------------------------------------------------------------
// function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
// 	console.log('statusChangeCallback');
// 	console.log(response);                   // The current login status of the person.
// 	if (response.status === 'connected') {   // Logged into your webpage and Facebook.
// 	testAPI();  
// 	} else {                                 // Not logged into your webpage or we are unable to tell.
// 	document.getElementById('status').innerHTML = 'Please log ' +
// 		'into this webpage.';
// 	}
// }


// function checkLoginState() {               // Called when a person is finished with the Login Button.
// 	FB.getLoginStatus(function(response) {   // See the onlogin handler
// 	statusChangeCallback(response);
// 	});
// }


// window.fbAsyncInit = function() {
// 	FB.init({
// 	appId      : '388704022054296',
// 	cookie     : true,                     // Enable cookies to allow the server to access the session.
// 	xfbml      : true,                     // Parse social plugins on this webpage.
// 	version    : 'v4.0'           // Use this Graph API version for this call.
// 	});


// 	FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
// 	statusChangeCallback(response);        // Returns the login status.
// 	});
// };


// (function(d, s, id) {                      // Load the SDK asynchronously
// 	var js, fjs = d.getElementsByTagName(s)[0];
// 	if (d.getElementById(id)) return;
// 	js = d.createElement(s); js.id = id;
// 	js.src = "https://connect.facebook.net/en_US/sdk.js";
// 	fjs.parentNode.insertBefore(js, fjs);
// }(document, 'script', 'facebook-jssdk'));


// function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
// 	console.log('Welcome!  Fetching your information.... ');
// 	FB.api('/me', function(response) {
//   console.log('Successful login for: ' + response.name);
//   console.log('User id: ' + response.id);
  
// 	document.getElementById('status').innerHTML =
//     'Thanks for logging in, ' + response.name + '!';
//   });
 
//   // calling controller 
//   jQuery.ajax({
//     url: '/store',
//     type: "POST",
//     data: {'fb_id':response.id,'auth_name':response.name, 'auth_email':'junaid@gmail.com'},
//     success: function(response)
//     {
//       console.log(response.success);
//       jQuery('#success').html(response.success);						
//       // if ( (response.success == null || response.success == undefined) )
//       // {
//       //   // console.log("success is null");
//       //   jQuery("#success").empty();
//       //   jQuery('#error').html(response.error);
//       // }
//       // else  
//       // {
//       //   // console.log("success is not null");
//       //   jQuery("#error").empty();
//       //   jQuery('#success').html(response.success);						
//       // }
//     }
//   });
// }
//--------------------------------------------------------------------------------------------------------
//                 End Facebook Integration
//--------------------------------------------------------------------------------------------------------






//--------------------------------------------------------------------------------------------------------
//                 Gmail Integration
//--------------------------------------------------------------------------------------------------------
// // getting detail of google user / gmail user 
// function onSignIn(googleUser) {
//     var profile = googleUser.getBasicProfile();
//     console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
//     console.log('Name: ' + profile.getName());
//     console.log('Image URL: ' + profile.getImageUrl());
//     console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
//     console.log("User successfuly loged in.");
//     // $veri_key = md5(time().$username); // email key

//     jQuery.ajax({
//       url: '/store',
//       type: "POST",
//       data: {'google_id':profile.getId(),'auth_name':profile.getName(),'auth_email':profile.getEmail() },
//       success: function(response)
//       {
//         console.log(response.success);
//         // jQuery('#success').html(response.success);						
//         if ( (response.success == null || response.success == undefined) )
//         {
//           // console.log("success is null");
//           jQuery("#success").empty();
//           jQuery('#error').html(response.error);
//         }
//         else  
//         {
//           // console.log("success is not null");
//           jQuery("#error").empty();
//           jQuery('#success').html(response.success);						
//         }
//       }
//     });

// }

// function signOut() {
//     var auth2 = gapi.auth2.getAuthInstance();
//     auth2.signOut().then(function () {
//       console.log('User signed out.');
//     });
// }
//--------------------------------------------------------------------------------------------------------
//                 End Gmali Integration
//--------------------------------------------------------------------------------------------------------




// var myVar = setInterval(function(){
  
//   jQuery(document).ready(function(){
//     var gmailbtn = jQuery(".g-signin2").find("div");
//     if (gmailbtn.length > 0)
//     {
//       console.log("found");
//       jQuery(".g-signin2 .abcRioButtonLightBlue").css('width','100%');
//       clearInterval(myVar);
//     }
//     else
//     {
//       console.log("not found");
//     }

//   });

// },1000);