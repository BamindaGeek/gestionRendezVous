/*$(function () {
    if(typeof $.UserConnected != 'undefined' && $.UserConnected != null)
    {
        window.location.href ='../login' ;
    }
})*/
//Script disponible lorsque la page est correctement chargée
app.controller('controlerTelya', function($scope,$http) {
    //Function de connextion d'un utilisateur
    $scope.connexionUser =  function (event) {
        if(typeof $scope.password == 'undefined' || typeof $scope.loginUser == 'undefined'){
            //Do something
            swal({
                text: 'Veuillez saisir vos accès svp!',
                button: {
                    text: "OK",
                    value: true,
                    visible: true,
                    className: "btn btn-primary"
                }
            });

            return;
        }

        $http({
            method : "POST",
            url : controlerUrl+"coConnexion.php",
            headers:{
                'Content-Type':'application/x-www-form-urlencoded'
            },
            data:'username='+$scope.loginUser+'&password='+$scope.password+'&test=1'
        }).then(function(response, status) {
            if(!response.data.status)
            {
                swal({
                    title: 'Êtes-vous sûre ?',
                    text: "Vous êtes sur le point d'ouvrir une nouvelle session !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3f51b5',
                    cancelButtonColor: '#ff4081',
                    confirmButtonText: 'Great ',
                    buttons: {
                        cancel: {
                            text: "J'annule",
                            value: null,
                            visible: true,
                            className: "btn btn-primary",
                            closeModal: true,
                        },
                        confirm: {
                            text: "Je confirme",
                            value: true,
                            visible: true,
                            className: "btn btn-success",
                            closeModal: true
                        }
                    }
                }).then((result) => {
                    if (result) {
                        setTimeout(function(){
                            teLya.setCookie('usersTelya',response.data.donnees,30);
                            window.location.href ='../dashbord';
                        },200);
                    }
                    else
                    {
                        teLya.removeCookie('usersTelya');
                    }
                });
            }
            else
            {
                swal(
                    'Connexion Utilisateur!',
                    response.data.message,
                    'warning'
                );
            }
        },function(response, status){
            swal(
                'Connexion Utilisateur!',
                'Oups! Erreur lors de la connexion. Veuillez réessayer si celà persiste veuillez contater svp l\'administrateur.',
                'warning'
            );
        });
    }
});