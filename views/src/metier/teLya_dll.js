//Mise en place de notre dll js pour nos methode générique
teLya = {
    //Fonction de serialisation d'objet
    deconnexion: function(){
        swal({
            title: 'Êtes-vous sûre ?',
            text: "Vous êtes sur le point de fermer votre session !",
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
        }).then((result) =>{
            if(result){
                setTimeout(function(){
                    teLya.removeCookie('usersTelya');
                    window.location.href ='../logout';
                },200);
            }
            else
            {
                //teLya.removeCookie('usersTelya');
            }
        });
    },
    serializeObj: function (obj) {
        var result = [];

        for (var property in obj)
            result.push(encodeURIComponent(property) + "=" + encodeURIComponent(obj[property]));

        return result.join("&");
    },
    setCookie :function (cname, cvalue, exdays) {
        Cookies.set(cname, cvalue, { expires: exdays });
        //Cookies.set(cname, cvalue, { expires: exdays, path: '' });
    },
    getCookie :function (cname) {
        //return Cookies.get('foo', { domain: 'sub.example.com' }); // `domain` won't have any effect...!
        //Cookies.remove('name', { path: '' }); // removed!

        return Cookies.getJSON(cname); // => 'value'
    },
    removeCookie: function(cname){
        Cookies.remove(cname);
        $.UserConnected = null;
    },
    checkCookie :function (cname) {
        var user = this.getCookie(cname);
        if (user != "") {
            return user;
        }
        else
        {
            return null;
        }
    } ,
    codeGenerer : function () {
        // Math.random should be unique because of its seeding algorithm.
        // Convert it to base 36 (numbers + letters), and grab the first 9 characters
        // after the decimal.
        return  ''+Math.random().toString(36).substr(2, 9).toUpperCase();
    },
    createUUID : function() { // RFC 4122-ish
        return Array.from(Array(32))
            .map((e, i) => {
                let someRandomValue = i === 12 ? 4 : (+new Date() + Math.random() * 16) % 16 | 0;
                return `${~[8, 12, 16, 20].indexOf(i) ? "-" : ""}${
                    (i === 16 ? someRandomValue & 0x3 | 0x8 : someRandomValue).toString(16)}`;
            }).join("");
    }
    ,
    insertionOneElmt : function (objectElement,$http,controler,$scope) {
        var serializeObjet = this.serializeObj(objectElement);
        swal({
            title: 'Êtes-vous sûre ?',
            text: objectElement.test == 1 ? "Vous êtes sur le point de créer un nouvel enregistrement !" : "Vous êtes sur le point de modifier "+objectElement.nameLocal+"!" ,
            icon: 'warning',
            /*showCancelButton: true,
            confirmButtonColor: '#3f51b5',
            cancelButtonColor: '#ff4081',
            confirmButtonText: 'Great ',*/
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
                $http({
                    method : "POST",
                    url : controlerUrl+controler,
                    headers:{
                        'Content-Type':'application/x-www-form-urlencoded'
                    },
                    data:serializeObjet
                }).then(function(response, status) {
                    if(!response.data.status)
                    {
                        setTimeout(function (event) {
                            swal(
                                'Message',
                                response.data.message,
                                'warning'
                            );
                            $('#exampleModal-4').modal('hide');
                            $scope.getAllItem();
                            //return true ;
                            //
                        },200)
                    }
                    else
                    {
                        swal(
                            'Message',
                            response.data.message,
                            'warning'
                        );
                        //return false;
                    }
                },function(response, status){
                    swal(
                        'Ajout d\'un enregistrement !',
                        'Oups! Erreur lors de la création. Veuillez réessayer si celà persiste veuillez contater svp l\'administrateur.',
                        'warning'
                    );
                    //return false;
                });
            }
        });
    },
    GetAllEntityValuesForListe: async function($http,$scope,entity,fieldId,fieldValue,controlId)
    {
        $http({
            method : "POST",
            url : controlerUrl+'coListe.php?test=1&entity='+entity+'&fieldId='+fieldId+'&fieldValue='+fieldValue+'',
            headers:{
                'Content-Type':'application/x-www-form-urlencoded'
            }
        }).then(function(response, status) {
            if(!response.data.status)
            {
                var lstData = response.data.donnees ;
                $("#"+controlId).empty().append('<option value=""></option>');
                $.each(lstData,function(index,Item){
                    $("#"+controlId).append('<option value="'+Item.id+'">'+Item.libelle+'</option>');
                });

                $("#"+controlId).select2({
                    placeholder: "Faire un choix"
                });
            }
            else
            {
                swal(
                    'Message',
                    response.data.message,
                    'warning'
                );
            }
        },function(response, status){
            swal(
                'Message !',
                'Oups! Erreur lors de la création. Veuillez réessayer si celà persiste veuillez contater svp l\'administrateur.',
                'warning'
            );
        });
    }
}