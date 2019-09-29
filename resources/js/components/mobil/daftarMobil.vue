<template>
	<div>
		<my-header/>
		<div id="contents" class="container">
            <div class="header">
				<h3 class="title"><i class="fa fa-arrow-right"></i> {{ title }}</h3>
            </div>
			<div class="row">
				<div class="col-12">
					<div class="search-box">
						<input type="text" placeholder="Search ...." onclick="return 0;">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4" v-for="(mobil,index) in mobils.data" :key="index">
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
	.search-box > input,.search-box > input:focus {
		width: -webkit-fill-available;
		height: 30px;
		padding: 5px 10px;
		border: 1px solid #5c6bc0;
		border-radius: 10px;
		color: #343434;
		outline: none !important;
		box-shadow: none !important;
	}
	.box-img{
		width: 100%;
		max-height: 250px;
	}
</style>