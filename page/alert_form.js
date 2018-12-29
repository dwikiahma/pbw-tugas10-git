	<script>
        function validasi(){
        var namaValid    = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
        var nama         = data.nama.value;
        var password     = data.password.value;
		var email        = data.email.value;
        var pesan        = '';

        if (nama == '') {
            pesan = '\n Nama tidak boleh kosong ! \n';
            }
           
        if (nama != '' && !nama.match(namaValid)) {
            pesan += '\n Nama tidak valid ! \n';
            }
             
        if (wa == '') {
            pesan += '\n No. Whatsapp tidak boleh kosong ! \n';
            }     

		if (ktp == '') {
            pesan += '\n No. KTP tidak boleh kosong ! \n';
            }     
			
        if (pesan != '') {
            alert('\n'+pesan);
            return false;
            }
        return true
        }
	</script>