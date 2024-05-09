const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'PHP OOP',
      productions: []
    }
  },
  methods: {
    fetchProductions(){
        axios.get('./db.php').then((res) => {
         
            this.productions = res.data;
           
        })
    }

  },
  created(){
    this.fetchProductions();
   
  }
}).mount('#app')