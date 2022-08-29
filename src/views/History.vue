<template>
  <header>
    <body>
      <div class="back">
        <router-link to="/"><img src="../assets/back.svg" width="50" height="50"/></router-link>
      </div>
      <h1>HISTORY</h1>
    
        <table>   
          <thead>
          <tr>
            <th class="left">Name</th>
            <th class="right">Date</th>
          </tr>
          </thead>

          <tbody>  
          <tr v-for="item of history" :key="item.id">
            <td class="left">{{ item.username }}</td>
            <td class="right">{{ fieldTime(item.created_at) }}</td>
          </tr>

          </tbody>

        </table>
      
    </body>
  </header>
</template>

<script>
import axios from "axios";

export default {
  name: "App",
  data() {
    return {
      history: [],
    };
  },
  methods: {
    getHistory() {
      axios
        .get("http://127.0.0.1:8000/api/task")
        .then((response) => {
          this.history = response.data.data;
          console.log(this.history); //cek data history
        })
        .catch((error) => {
          console.log(error);
        });
    },
    fieldTime(data){
      let date = new Date(data)
      let jam = date.getHours().toString()
      let menit = date.getMinutes().toString()
      return `${jam}.${menit}`
    },
  },
  mounted() {
    console.log("cek history");
    this.getHistory();
    // this.fieldTime();
  },
};

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
  border-collapse: collapse;
  border-spacing: 50px; 
  border: 1px;
  width: 500px;
  height: 300px;
  margin: 0 auto;
  background: #daceff;
  color: #5016ff;
  font-family: 'Quicksand', sans-serif;
  font-weight: 700;
  border-radius: 20px;
}

.back {
  margin: 30px;
}

/* .tabelChild {
  position: absolute;
  /* padding-top: 20px;
    margin: 20px; 
  margin-top: 10px;
  padding-top: 0px;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  color: #5016ff;
} */

/* .tabelContainer {
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
} */

h1 {
  color: white;
  text-align: center;
}

th{
  padding: 15px;
  border-bottom: 2px solid #5016ff;
}

td{
  padding: 5px;
}

tbody{
  display: block;
  height: 300px;
  overflow-y: scroll;
}

tbody::-webkit-scrollbar{
  width: 5px;
}

tbody::-webkit-scrollbar-thumb{
  background: #6c49d6;
  border-radius: 10px;
}

thead, tbody tr{
  display: table;
  width: 100%;
  table-layout: fixed;
}

.left{
  text-align: left;
}

.right{
  text-align: right;
  padding-right: 20px;
}

</style>