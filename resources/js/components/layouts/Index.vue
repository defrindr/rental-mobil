<template>
	<div>
		<my-header></my-header>
		<div id="contents" class="container">
            <div class="header">
                <h3 class="title"><i class="fa fa-arrow-right"></i> {{ title }}</h3>
            </div>
			<section-unggul/>
        </div>
		<my-footer/>
	</div>
</template>

<script>
	export default {
		components:{
			myHeader: () => import('./header.vue'),
			myFooter: () => import('./footer.vue'),
			sectionUnggul: () =>import('./index/section-unggul.vue'),
		},
		data() {
			return {
				title:'Index',
				mobils: []
			}
		},
		mounted() {
			console.log("success")
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