<template>
     <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" :src="backgroundUrl" alt="">
                </div>
                <div class="blog_details">
                   <h2>{{ title }}</h2>
                   <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                      <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                   </ul>
                   <slot></slot>
                
                </div>
             </div>
           
          </div>
    </template>
<script>
export default{
    name:'place-details',
    props:['title','backgroundUrl'],
    data(){
         return{
                image:{ backgroundImage:`url(${this.backgroundUrl})` }
            }
      }

}
</script>