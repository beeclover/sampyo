function select(config) {
  console.log(config);
  return {
    label: config.label ?? 'None',
    dropdown: false,
    toggle: function () {
      this.dropdown = !this.dropdown;
    },
    close: function () {
      this.dropdown = false;
    },
    selectOption(label) {
      this.label = label;
    },
  };
}

export { select };
