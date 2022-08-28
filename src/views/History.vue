<template>
  <header>
    <body>
      <div class="back">
        <router-link to="/"><img src="../assets/back.svg" width="50" height="50"/></router-link>
      </div>
      <h1>HISTORY</h1>
      <div class="tabelContainer">
        <table class="tabelChild">
          <tr>
            <td>Name</td>
            <td>Date</td>
          </tr>
          
          <tr>
            <td>Hello World</td>
            <td>15:00</td>
          </tr>

          <tr>
            <td>Hello World</td>
            <td>21:00</td>
          </tr>
        </table>
      </div>
    </body>
  </header>
</template>

<script>
export default {};
</script>

<style>
body {
  position: absolute;
  background-color: #5016ff;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

table{
  border-spacing: 50px; 
  border: 1px;
  width: 100%
}

.back {
  margin: 30px;
}

.tabelChild {
  position: absolute;
  /* padding-top: 20px;
    margin: 20px; */
  margin-top: 10px;
  padding-top: 0px;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  color: #5016ff;
}

.tabelContainer {
  width: 700px;
  height: 300px;
  border-radius: 50px;
  background: #daceff;
  text-align: center;
  margin-top: 10px;
  padding-top: 0px;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  color: white;
  overflow: auto;
}

h1 {
  color: white;
  text-align: center;
}
</style>