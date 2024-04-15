<script setup>
import {Head} from '@inertiajs/vue3';
import HeaderLayout from "@/Layouts/HeaderLayout.vue";
import TestBlock from "@/Components/TestBlock.vue";
import RoadMapSection from "@/Components/RoadMapSection.vue";
</script>

<template>
    <Head title="Welcome" />
  <HeaderLayout>
    <RoadMapSection/>
    <TestBlock/>
  </HeaderLayout>


</template>
