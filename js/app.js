var app = new Vue({
  el: '#app',
  data: {
    doc: false,
    pat: false,
    hos: false
  },
  methods: {
  	update: function(val){
  		this.doc = this.pat = this.hos = false;
  		console.log(val)
  		switch(val){
  			case 1: this.hos = true;
  			break;
  			case 2: this.pat = true;
  			break;
  			case 0: this.doc = true;
  			break;
  		}
  	}
  }
})