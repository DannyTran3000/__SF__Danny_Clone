const LoginForm__resetValidation = () => {
  const validationBox = document.querySelector('#login .contact__validation')
    if (validationBox) validationBox.innerHTML = ''
}

const LoginForm__displayError = (message) => {
  const validationBox = document.querySelector('#login .contact__validation')
  if (validationBox) validationBox.innerHTML = `
      <p>${message}</p>
    `
  else window.alert(message)
}

const LoginForm__handleSubmit = (data) => {
  if (!data?.data?.user) {
    setTimeout(() => {
      toggleGlobalLoader(false)
      LoginForm__displayError('Email or password are incorrect!!! Please check your email and password input.')
    }, 1500)
    return
  }

  const encodedToken = btoa(JSON.stringify(data.data.user));
  localStorage.setItem('auth_token', encodedToken)

  window.location.reload()
}

const LoginForm__onSubmit = () => {
  LoginForm__resetValidation()
  const form = document.querySelector('#login__form')
  if (!form) {
    console.log('Form Not Found')
    return
  }

  const email = form.querySelector('input[name="email"]')?.value || null
  if (!checkValidEmail(email)) {
    LoginForm__displayError('Invalid email address!!! Please check your Email address input.')
    return
  }

  const formData = new FormData(form)
  toggleGlobalLoader(true)
  sendRequest('/login', 'POST', formData, LoginForm__handleSubmit)
}