
function validasi(){
		var namaValid    = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
		var nama         = data.nama.value;
		var wa           = data.wa.value;
		var ktp          = data.ktp.value;
		var pesan        = '';

		if (nama == '') {
			pesan = '-Nama tidak boleh kosong !\n';
			}
		   
		if (nama != '' && !nama.match(namaValid)) {
			pesan += '-Nama tidak valid !\n';
			}
		
		if (wa == '') {
			pesan += '-No. WA tidak boleh kosong !\n';
			}
			
		if (ktp == '') {
			pesan += '-No. KTP tidak boleh kosong !\n';
			}
			
		if (pesan != '') {
			alert('Kesalahan teknis : \n'+pesan);
			return false;
			}
			
		return true
	}