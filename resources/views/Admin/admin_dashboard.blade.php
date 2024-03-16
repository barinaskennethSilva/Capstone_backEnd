      @include('/Admin/admin_header')

<div class="container">

<div class="pageImg">

</div>

</div>




<style scoped>
@media screen and (min-width:360px) and (max-width:480px){
.container{
  with:50% !important;
  height:100vh;
  background-color: red;
  position: relative;
  left: 120px;
}
.card img{
height:130px;
}

}
@media screen and (min-width:1024px){
.container{
  width:80% !important;
  height:100vh;
  background-color: green;
  position: relative;
  left: 153px;
  padding: 0px;
}
.pageImg{
	width: 100%;
	height: 100%;
	background-image: url({{ asset('./AdminPic/JillieJens01.png') }});
	background-size: cover;
 }

}
</style>