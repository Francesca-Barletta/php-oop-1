const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'PHP OOP',
      productions: [],
      movies: []
    }
  },
  methods: {
    fetchProductions(){
        axios.get('./db.php').then((res) => {
       console.log(res.data);
       this.movies = res.data;
      //  console.log(this.movies);
        })
    }

  },
  created(){
    this.fetchProductions();
  }
}).mount('#app')