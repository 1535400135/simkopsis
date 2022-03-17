    $(document).ready(function () {
        // var baseURL = window.location.origin; // production
        var baseURL = window.location.origin+'/order-app/'; // development
        var pelangganURL = baseURL+'pelanggan';

       if (window.location.href === pelangganURL){
            injectPelangganInputSearch();
        }


        function injectPelangganInputSearch() {
            let url = baseURL+'Service/getPelanggan';
            let pelanggans = [];
            $.ajax({
                url:url,
                async : true,
                dataType:'json',
                cache : false,
                type: 'GET',
                success: function (response) {
                    for (let i = 0; i < response.length ; i++) {
                        pelanggans.push({
                           'id' : response[i].pelanggan_id,
                            'nama': response[i].pelanggan_nama,
                            'alamat' : response[i].pelanggan_alamat
                        });
                    }
                },
                error : function (response) {
                    console.log(response.text);
                }
            });

            var options = {
                data: pelanggans,

                getValue: "nama",

                template: {
                    type: "description",
                    fields: {
                        description: "alamat"
                    }
                },
                list: {
                    maxNumberOfElements: 8,
                    match: {
                        enabled: true
                    },
                    onClickEvent: function () {
                        var id = $("#search-pelanggan").getSelectedItemData().id;
                        reqDetailPelanggan(id);
                    }
                }
            };

            $("#search-pelanggan").easyAutocomplete(options);
        }


        // redirect to detail pelanggan if any item selected
        function reqDetailPelanggan(id) {
            window.location.href = baseURL+'pelanggan/'+id;
        }

    });