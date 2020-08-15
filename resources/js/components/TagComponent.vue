<template>
    <div id="tag" >
   <div class="row">
     <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
         <div class="card-header">
              <h4 class="card-title">Tags Table</h4>
            <div class="card-tools" style="position: absolute;right: 1rem;top: .5rem;">
              <!-- <button type="button" class="btn btn-info" @click="create">
                Add New
                <i class="fas fa-plus"></i>
              </button> -->
              <button type="button" class="btn btn-primary" @click="reload">
                Reload
                <i class="fas fa-sync"></i>
              </button>
            </div>
          </div>
      <div class="card-body">
     
        <div class="mb-3">
              <div class="row">
                <div class="col-md-2">
                  <strong>Search By :</strong>
                </div>
                <div class="col-md-3">
                  <select v-model="queryFiled" class="form-control" id="fileds">
                    <option value="name">Name</option>
                    <option value="slug">Slug</option>
                    
                  </select>
                </div>
                <div class="col-md-7">
                  <input v-model="query" type="text" class="form-control" placeholder="Search">
                </div>
              </div>
            </div>
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

             <tr v-for="(tag,index) in tags"  :key="tag.id">
              <th scope="row">{{index+1}}</th>
              <td>{{tag.name}}</td>
              <td>{{tag.slug}}</td>
              <td rowspan="1">
               
                <button type="button" class="btn btn-success btn-sm m-0">
                          <i class="mdi mdi-pencil btn-icon-prepend"></i>
                         
                        </button>
                         <button type="button" class="btn btn-danger btn-sm m-0">
                          <i class="mdi mdi-delete btn-icon-prepend"></i>
                         
                        </button>
              </td>
             
             </tr>
            </tbody>
           
          </table>
         <pagination v-if ="pagination.last_page > 1"
                    :pagination="pagination"
                    :offset="5"
                    @paginate="query==''?getData():searchData()"
         
         ></pagination>
        </div>
        
      </div>
      
    </div>
  </div>
</div>
<vue-progress-bar></vue-progress-bar>
    </div>
</template>

<script>
    export default {
        

        data(){
          return {
            query: "",
      queryFiled: "name",
            tags :[],
            pagination:{
              current_page : 1,
            }
          }
        },
        watch: {
    query: function(newQ, old) {
      if (newQ === "") {
        this.getData();
      } else {
        this.searchData();
      }
    }
  },
        mounted() {
            // console.log('Component mounted.');
            this.getData();
        },
        methods:{
          getData(){
            this.$Progress.start()
            axios.get('api/tag?page='+this.pagination.current_page)
            .then(response => {
                // console.log(response.data)

                this.tags = response.data.data
                this.pagination = response.data.meta
                this.$Progress.finish()
              }).catch(e => {
              console.log("gagal")
              this.$Progress.fail()
            });
          },
          searchData() {
      this.$Progress.start();
      axios
        .get(
          "api/tag/search/" +
            this.queryFiled +
            "/" +
            this.query +
            "?page=" +
            this.pagination.current_page
        )
        .then(response => {
          this.tags = response.data.data;
          this.pagination = response.data.meta;
          this.$Progress.finish();
        })
        .catch(e => {
          console.log(e);
          this.$Progress.fail();
        });
    },
    reload() {
      this.getData();
      this.query = "";
      this.queryFiled = "name";
      // this.$snotify.success("Data Successfully Refresh", "Success");
    },
          
        }
    }


    


    
</script>

