<template>
  <header>
    <body>
      <div class="bg">
        <div class="back">
          <router-link to="/"
            ><img src="../assets/back.svg" width="50" height="50"
          /></router-link>
        </div>

        <div class="jam-digital-malasngoding">
          <div class="kotak">
            <p id="jam"></p>
          </div>
          <div class="kotak">
            <p id="menit"></p>
          </div>
          <div class="kotak">
            <p id="detik"></p>
          </div>
        </div>

        <h2>15:00</h2>
        <h1>HelloWorld</h1>
      </div>
    </body>
  </header>
</template>

<script>
export default {
  name: "App",
  data(){
    return{
    }
  },
  computed: window.setTimeout("waktu()", 1000);
 
	waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	} 
}
</script>

<style scoped>
/* body {
  position: absolute;
  background-color: #5016ff;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
} */

.bg {
  position: absolute;
  background-color: #5016ff;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.back {
  margin: 30px;
}

h1,
h2,
p,
a {
  color: black;
  text-align: center;
}

.jam-digital-malasngoding {
  overflow: hidden;
  width: 330px;
  margin: 20px auto;
  border: 5px solid #efefef;
}
.kotak {
  float: left;
  width: 110px;
  height: 100px;
  background-color: #189fff;
}
.jam-digital-malasngoding p {
  color: #fff;
  font-size: 36px;
  text-align: center;
  margin-top: 30px;
}
</style>

