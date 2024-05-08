const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'Hello Vue!',
      discs: []
    }
  },
  methods: {
    // recuperare i dati dal server con chiamata get (axios)
    fetchData(){
        axios.get('./server.php').then((res) => {
            this.discs = res.data.results
        })
        console.log(this.discs)
    }
  },
  created() {
    this.fetchData()
},
}).mount('#app')
