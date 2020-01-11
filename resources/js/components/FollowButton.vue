<template>
  <div>
    <button class="btn btn-primary ml-4" @click="followUser">
      <strong v-text="buttonText"></strong>
    </button>
  </div>
</template>

<script>
import { METHODS } from "http";
export default {
  props: ["userId", "follows"],

  mounted() {
    console.log("Component mounted.");
  },

  data: function() {
    return {
      status: this.follows
    };
  },

  methods: {
    followUser() {
      //alert("Following");
      axios
        .post("/follow/" + this.userId)
        .then(response => {
          //alert(response.data);

          this.status = !this.status;
          //console.log(this.status);
          console.log(response.data);

          window.location.reload();
        })
        .catch(errors => {
          if (errors.response.status == 401) {
            window.location = "/login";
          }
          //console.log(errors);
        });
    }
  },

  computed: {
    buttonText() {
      return this.follows ? "Unfollow" : "Follow";
    }
  }
};
</script>
