
<script>
   var app = new Vue({
        el: "#myapp",
        data(){
            return {
                message:"asdasdasd",
                newpost:"",
                posts:[
                    {name:"ASda", age:"asdasdas"},
                    {name:"as", age:"asdaggggsdas"},
                    {name:"ss", age:"asdgasasdasdasdas"}
                ]
            }
        },
        methods:{
            addPost(){
                if(this.newpost != ""){
                    let post = {name:this.newpost, age:21}
                    this.posts.push(post)
                    this.newpost =""
                }
            }
        },
        computed:{
            myPost(){
                return this.posts;
            }
        },
        mounted(){

        }
    })
</script>
