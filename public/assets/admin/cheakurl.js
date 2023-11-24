function string_to_slug(str) {
  str = str.replace(/^\s/g, ""); // trim
  str = str.toLowerCase();
  // remove accents, swap ñ for n, etc
  var from = "àáãäâèéëêìíïîòóöôùúüûñç·/_,:;";
  var to = "aaaaaeeeeiiiioooouuuunc------";

  for (var i = 0, l = from.length; i < l; i++) {
    str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
  }
  str = str
    .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
    .replace(/\s+/g, "-") // collapse whitespace and replace by -
    .replace(/-+/g, "-"); // collapse dashes
  return str;
}
function check() {
  const input = document.getElementById("url");
  const input_val = input.value;

  const ck = string_to_slug(input_val);
  input.value = ck;
}
