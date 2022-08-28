<template>
  <header>
    <body>
      <div class="bg">
        <div class="back">
          <router-link to="/"
            ><img src="../assets/back.svg" width="50" height="50"
          /></router-link>
        </div>

        <div>
          <div class="jam_analog_container">
            <div class="xxx">
              <div class="jarum jarum_detik"></div>
              <div class="jarum jarum_menit"></div>
              <div class="jarum jarum_jam"></div>
              <div class="lingkaran_tengah"></div>
            </div>
          </div>
        </div>

        <p class="time"></p>

        <!-- <div class="jam-digital">
          <div class="kotak">
            <p id="jam"></p>
          </div>
          <div class="kotak">
            <p id="menit"></p>
          </div>
          <div class="kotak">
            <p id="detik"></p>
          </div>
        </div> -->

        <h1>HelloWorld</h1>
      </div>
    </body>
  </header>
</template>

<script>
export default {
  name: "App",
  methods: {
    InitClock() {
      const secondHand = document.querySelector(".jarum_detik");
      const minuteHand = document.querySelector(".jarum_menit");
      const jarum_jam = document.querySelector(".jarum_jam");

      const now = new Date();

      const seconds = now.getSeconds();
      const secondsDegrees = (seconds / 60) * 360 + 90;
      secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
      if (secondsDegrees === 90) {
        secondHand.style.transition = "none";
      } else if (secondsDegrees >= 91) {
        secondHand.style.transition =
          "all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)";
      }

      const minutes = now.getMinutes();
      const minutesDegrees = (minutes / 60) * 360 + 90;
      minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;

      const hours = now.getHours();
      const hoursDegrees = (hours / 12) * 360 + 90;
      jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;

      
    },
    digitalClock() {
		var waktu = new Date();
		setTimeout(this.digitalClock, 1000);
		// document.getElementById("jam").innerHTML = waktu.getHours();
		// document.getElementById("menit").innerHTML = waktu.getMinutes();
		// document.getElementById("detik").innerHTML = waktu.getSeconds();
    document.querySelector(".time").innerHTML = `${waktu.getHours()} : ${waktu.getMinutes()} : ${waktu.getSeconds()}`;
	}
  },
	
  mounted() {
    console.log("cek");
    // setInterval(this.InitClock, 1000);
    setInterval(this.InitClock, 1000);
    setTimeout(this.digitalClock, 1000);
  },
};
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
h2 {
  color: white;
  text-align: center;
}

.titik{
    float: left;
  /* padding: 10px; */
}

/* jam analog */
.jam_analog_container {
  position: relative;
  width: 240px;
  height: 240px;
  border: 16px solid white;
  border-radius: 50%;
  padding: 20px;
  margin: 20px auto;
}

.xxx {
  height: 100%;
  width: 100%;
  position: relative;
}

.jarum {
  position: absolute;
  width: 50%;
  background: white;
  top: 50%;
  transform: rotate(90deg);
  transform-origin: 100%;
  transition: all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1);
}

.lingkaran_tengah {
  width: 24px;
  height: 24px;
  background: white;
  border: 4px solid white;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -14px;
  margin-top: -14px;
  border-radius: 50%;
}

.jarum_detik {
  height: 2px;
  border-radius: 1px;
  background: #f0c952;
}

.jarum_menit {
  height: 4px;
  border-radius: 4px;
}

.jarum_jam {
  height: 8px;
  border-radius: 4px;
  width: 35%;
  left: 15%;
}
/* jam analog end */

/* jam digital */
.jam-digital {
  overflow: hidden;
  width: 330px;
  margin: 20px auto;

}
.jam-digital p {
  color: #fff;
  font-size: 36px;
  text-align: center;
  margin-top: 30px;
}

.time {
  text-align: center;
  color: white;
  font-size: 70px;
  margin-top: 10px;
}
/* jam digital end */

</style>

