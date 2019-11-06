<template>
    <section class="unggul">
		<div class="head-title">
			<span>Keunggulan</span>
		</div>
		<div class="row">
			<div class="col-3">
				<div class="item">
					<div class="icon"><i class="fa fa-calendar"></i></div>
					<div class="unggul-desc">
						<h4>Jangka Waktu</h4>
						Bisa pinjam dalam jangka waktu lama
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="item">
					<div class="icon"><i class="fa fa-dollar"></i></div>
					<div class="unggul-desc">
						<h4>Terjangkau</h4>
						Harga sewa yang terjangkau
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="item">
					<div class="icon"><i class="fa fa-apple"></i></div>
					<div class="unggul-desc">
						<h4>Elegant</h4>
						Kami mengutamakan ke-elegant-an mobil yang kami sewakan
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="item">
					<div class="icon"><i class="fa fa-id-card"></i></div>
					<div class="unggul-desc">
						<h4>Membership</h4>
						Kami menawarkan layanan membership untuk penyewaan yang lebih murah
					</div>
				</div>
			</div>
		</div>
	</section>
</template>
<script>
export default {
    
}
</script>

<style lang="scss" scoped>
	.unggul{
		background: #FFF;
		padding: 10px;
		border-radius: 10px;
		border: 1px solid #dadada;
		.head-title{
			span{
				display: inline-block;
				border-bottom: 2px solid #5c6bc0;
				padding: 0 10px;
			}
			text-align: center;
			font-size: 24px;
			margin: 0 0 30px;
			color: #5c6bc0;
		}
		.row {
			.col-3 > .item{
				border-left: 1px solid #aaa;
				padding: 10px;
				min-height: 200px;
				.icon{
					font-size: 48px;
					text-align: center;
					color: #5c6bc0;
				}
				.unggul-desc {
					color: #555;
					text-align: center;
				}
			}
			.col-3:first-child > .item{
				border: 0;
			}
		}
	}
	@media screen and (max-width: 600px) {
		.unggul{
			.row {
				.col-3 > .item{
					border-left: 0px;
					border-top: 1px solid #aaa;
					min-height: auto;
				}
			}
		}
	}
</style>