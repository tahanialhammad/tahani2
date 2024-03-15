<template>
  <svg :id="'icon-' + iconName" class="icon-xxl icon-dark" viewBox="0 0 11.5 11.5">
    <path :d="icons[iconName]" />
  </svg>
</template>

<script>
export default {
  props: {
    iconName: {
      type: String,
      required: true
    }
  },
  data() {
    return {
      icons: {
        add: 'M10.8 5H6.5V.8c0-.5-.3-.8-.7-.8S5 .3 5 .8V5H.8c-.5 0-.8.3-.8.8s.3.8.8.8H5v4.3c0 .4.3.8.8.8s.8-.3.8-.8V6.5h4.3c.4 0 .8-.3.8-.8s-.5-.7-.9-.7z',
        home: "M5.8 1.6l4.5 3.7v4.9h-9V5.4l4.5-3.8m0-1.6L0 4.8v6.8h11.6V4.8L5.8 0z",
      }
    };
  }
};
</script>
