<template>
    <div class="row">
        <section class="unggul">
			<div class="head-title">
				<span>Pelayanan</span>
			</div>
			<div class="row">
				<div class="col-3">
					<div class="item">
						<div class="icon"><i class="fa fa-address-card"></i></div>
						<div class="unggul-desc">
							Ini deskripsinya 1
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="item">
						<div class="icon"><i class="fa fa-address-card"></i></div>
						<div class="unggul-desc">
							Ini deskripsinya 2
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="item">
						<div class="icon"><i class="fa fa-address-card"></i></div>
						<div class="unggul-desc">
							Ini deskripsinya 3
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="item">
						<div class="icon"><i class="fa fa-address-card"></i></div>
						<div class="unggul-desc">
							Ini deskripsinya 4
						</div>
					</div>
				</div>
			</div>
		</section>
    </div>
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