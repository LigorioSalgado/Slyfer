angular.module('angular_post_demo',[]);

app.controller('postfile', function ($scope, $http) {
/*
* This method will be called on click event of button.
* Here we will read the email and password value and call our PHP file.
*/
$scope.sendfile = function () {

document.getElementById("message").textContent = "";

var request = $http({
    method: "post",
    url: window.location.href + "upload.php",
    data: {

        file: $scope.fileToUpload
    },
    headers: { 'Content-Type': 'multipart/form-data' }
});

/* Check whether the HTTP Request is successful or not. */
request.success(function (data) {
    document.getElementById("message").textContent = "You have login successfully with email";
});
}
});
