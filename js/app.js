const { createApp } = Vue

createApp({
  data() {
    return {
      discs: []
    }
  },
  methods: {
    // recuperare i dati dal server con chiamata get (axios)
    fetchData(){
        axios.get('./server.php').then((res) => {
            this.discs = res.data.results
        })
    }
  },
  created() {
    this.fetchData()
},
}).mount('#app')
