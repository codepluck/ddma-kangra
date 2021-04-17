<template>
    <router-link
        v-if="menuHeaderTop.length > 0"
        v-for="menu in menuHeaderTop"
        :key="menu.id"
        :to="{name: 'home'}"
        class="navbar-brand">{{ menu.name }}
    </router-link>
</template>
