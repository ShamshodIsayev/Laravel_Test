<template>

  <div id="app">
   <div class="container m-auto main-body">
     <div class="row m-auto">

       <div class="col-lg-6">
         <div class="main-text mt-20">
            <h1 class="main_title">Web Developer</h1>
            <p class="main_p">Hey, I'm Shamshod Isayev from Tashkent, curios, experienced, disciplinary and creative web developer. Ready for justify accumulated knowledge. Trying to implement people's unusual , wondrous wishes in Web development</p>

             <div class="input-skill mb-10">
                <form action="" @submit.prevent="addToSkills"  ref="input">
                   <input class="ml-auto" type="text" v-model="inputSkill">
                   <button type="submit" class="btn-success"
                   >Add Skill
                   </button>
                </form>
             </div>

            <div class="card">
               <div class="card-header">Skills</div>

               <div class="card-body">
                 <span class="skills_p m-2" v-for="(skil , index) in allSkills" :key="index">{{skil}}</span>
               </div>

            </div>

        </div>
      </div>

       <div class="col-lg-6">
          <div class="img m-auto">
            <img class="d-block m-auto" src="https://www.pngplay.com/wp-content/uploads/4/Man-No-Background.png" alt="">
          </div>
       </div>

     </div>
   </div>
  </div>

</template>

<script>
export default {
  data: ()=>({
    inputSkill: '',
    showAllSkills:'',
    allSkills: ['HTML5', 'CSS3', 'JavaScript'],
  }),
  methods:{
    addToSkills($event){
    this.allSkills.push(this.inputSkill)
    this.inputSkill = ''
        }
  }
}
</script>

<style>
body{
  background: rgba(35, 30, 78, 0.712);
}

.skills_p{
  font-weight: 500;
  color: rgb(3, 3, 149);
  width: 150px;
}

.main_p{
  color: white;
  font-size: 19px;
}

.input-skill{
margin: 40px auto 10px;
}

.card-header{
  font-weight: 500;
  text-transform: uppercase;

}

.img{
  width: 100%;
}

.img img{
  width: 250px;
}

.main-text{
  margin-top: 25px;
}

.card-body{
  color: #868686;
}

.main-body{
  margin-top: 50px !important;
}
</style>