function hitung(){
	let dewasa = document.getElementById("dewasa").value;
	let anak = document.getElementById("anak").value;
    count = 10000*dewasa;
	if(anak > 0){
		count += 10000 * anak / 2;
	}
	document.getElementById("total_harga").innerHTML = count;
}