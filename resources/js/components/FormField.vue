<template>
    <FieldWrapper
      :class="{'bg-gray-100': true, 'dark:bg-gray-700': true, 'hidden': hidden}"
      v-if="currentField.visible"
    >
      <div
        v-html="currentField.html"
        :class="classes"
      />
    </FieldWrapper>
</template>

<script>
import { DependentFormField, HandlesValidationErrors } from 'laravel-nova'

export default {
  mixins: [DependentFormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
      this.html = this.field.html || ''
      this.alert_message = this.field.alert_message || null
      this.hidden = this.field.hidden || false
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || '')
    },
  },

  computed: {
    classes: () => [
      'remove-last-margin-bottom',
      'leading-normal',
      'w-full',
      'py-4',
      'px-8',
    ],
  },

  mounted() {
    if (this.alert_message) {
        alert(this.alert_message)
    }
  }
}
</script>
