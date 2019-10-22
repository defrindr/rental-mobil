<template>
	<div>
		<my-header/>
		<div id="contents" class="container">
            <div class="header">
				<h3 class="title"><i class="fa fa-arrow-right"></i> {{ title }}</h3>
            </div>
			<div class="row">
				<div v-for="(mobil,index) in mobils.data" :key="index" class="col-4">
					<div class="box">
						<div class="box-img">
							<img :src="'/media/mobil/'+mobil.image"/>
						</div>
						<hr>
						<div class="box-body">
							<h2>{{ mobil.merk }}</h2>
							<p>Mobil {{ mobil.merk }} dengan plat nomer {{ mobil.plat_nomer }} masih tersedia.</p>
						</div>
						<div class="box-footer">
							<a>Rp. {{ mobil.harga }} / Jam</a>
						</div>
					</div>
				</div>
            </div>
        </div>
		<my-footer/>
	</div>
</template>

<script>
	export default {
		components : {
			myHeader:()=>import("./../layouts/header.vue"),
			myFooter:()=>import("./../layouts/footer.vue")
		},
		data() {
			return {
				title:'Daftar Mobil',
				mobils: []
			}
		},
		mounted() {
			axios.post('/api/paginate').then(response => {
				this.mobils = response.data;
			});
		},
		methods: {
			paginate(url) {
				axios.get(url).then(response => {
					this.mobils = response.data;
				})
			}
		}
	}
</script>
<style scoped>
	.box{
		border: 1px solid #aaa;
	}
	.box-img{
		display: block;
		width: 100%;
		height: 250px;
	}
</style>