<template>
  <transition name="fade">
    <div class="flex-center position-ref full-height">
      <div class="content">
        <div class="title m-b-md">
          Laravel with Vuejs
        </div>

        <div class="links">
          <router-link :to="{ name: 'Example' }" class="btn btn-primary">Example</router-link>
        </div>
      </div>
    </div>
  </transition>
</template>

<script>
  export default{
  }
</script>

<style>
  .fade-enter-active, .fade-leave-active {
    transition: opacity .5s
  }
  .fade-enter, .fade-leave-active {
    opacity: 0
  }
</style>
