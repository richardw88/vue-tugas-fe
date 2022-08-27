<template>
  <header>
    <body>
      <div class="bg">
        
        <div class="back">
          <router-link to="/"><img src="../assets/back.svg" width="50" height="50"/></router-link>
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
        <h2>15:00</h2>
        <h1>HelloWorld</h1>
      </div>
    </body>
  </header>
</template>

<script>
export default {
  name: "App",
  data() {
    return {};
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

.back{
  margin:30px;
}

h1,
h2 {
  color: white;
  text-align: center;
}

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
</style>

