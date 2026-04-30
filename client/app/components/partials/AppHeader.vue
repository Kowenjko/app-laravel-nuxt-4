<script lang="ts" setup></script>

<template>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<nuxt-link class="nav-link" to="/">MyNextApp</nuxt-link>
			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#navbarNav"
			>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<!-- When user is authenticated -->
					<li class="nav-item">
						<nuxt-link class="nav-link" to="/dashboard">Dashboard</nuxt-link>
					</li>
					<li class="nav-item">
						<button class="btn btn-danger ms-2">Logout</button>
					</li>

					<!-- When user is not authenticated -->
					<!-- 
                    <li class="nav-item">
                        <nuxt-link class="nav-link" to="/">Home</nuxt-link>
                    </li>
                    <li class="nav-item">
                        <nuxt-link class="nav-link" to="/auth">Login</nuxt-link>
                    </li> 
                    -->
				</ul>
			</div>
		</div>
	</nav>
</template>
