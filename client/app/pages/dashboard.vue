<script lang="ts" setup>
useHead({
	title: 'Dashboard',
})
</script>

<template>
	<div class="container mt-4">
		<div class="row">
			<!-- Left Side: Form -->
			<div class="col-md-6">
				<div class="card p-4">
					<h4>Add Product</h4>
					<form>
						<input
							class="form-control mb-2"
							name="title"
							placeholder="Title"
							required
						/>
						<input
							class="form-control mb-2"
							name="description"
							placeholder="Description"
							required
						/>
						<input
							class="form-control mb-2"
							name="cost"
							placeholder="Cost"
							type="number"
							required
						/>
						<div class="mb-2">
							<img
								v-if="false"
								src=""
								alt="Preview"
								id="bannerPreview"
								style="width: 100px; height: 100px; display: none"
							/>
						</div>
						<input class="form-control mb-2" type="file" id="bannerInput" />
						<button class="btn btn-primary" type="submit">Add Product</button>
					</form>
				</div>
			</div>

			<!-- Right Side: Table -->
			<div class="col-md-6">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Banner</th>
							<th>Cost</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Sample Product</td>
							<td>
								<img
									v-if="false"
									src=""
									alt="Product"
									style="width: 50px; height: 50px"
								/>
							</td>
							<td>$100</td>
							<td>
								<button class="btn btn-warning btn-sm me-2">Edit</button>
								<button class="btn btn-danger btn-sm">Delete</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</template>
