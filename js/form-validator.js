function validateForm() {
  const email = document.forms[0]["email"].value;
  if (!email.includes("@")) {
    alert("Please enter a valid email.");
    return false;
  }
  return true;
}
