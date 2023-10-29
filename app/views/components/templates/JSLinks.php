<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script>
  let isOriginLoading = true

  const toggleGlobalLoader = (shouldShow = true, isOrigin = false) => {
    const body = document.querySelector('body')
    if (body) {
      body.style.overflow = shouldShow ? 'hidden' : 'unset'

      if (isOriginLoading) {
        setTimeout(() => {
          isOriginLoading = false
          body.setAttribute('data-load', 'true')
        }, 3000)
      }
    }

    const loader = document.querySelector('#loader')
    if (!loader) return

    loader.innerHTML = shouldShow ? `<?php include(ROOT_PATH . '/views/components/molecules/Loader.php'); ?>` : ''
  }

  const onLogout = () => {
    localStorage.removeItem('auth_token')
    window.location.reload()
  }
</script>

<script>
  const token = localStorage.getItem('auth_token')
  let decodedUserData = null
  let userData = null
  if (token) {
    decodedUserData = atob(token)
    userData = decodedUserData ? JSON.parse(decodedUserData) : null
  }

  const userDropdown = document.querySelector('#nav__user-dropdown')
  
  if (userData?.email) {
    const pathname = window.location.pathname
    if (pathname.startsWith('/login')) {
      window.location.href = '/'
    }
    const loginButton = document.querySelector('#login-button')
    if (loginButton) loginButton.style.display = 'none'

    if (userDropdown) {
      const userLink = userDropdown.querySelector('.nav-link')
      if (userLink) userLink.innerHTML = `Welcome ${userData?.first_name}`
    }
  } else {
    if (userDropdown)
      userDropdown.style.display = 'none'
  }
</script>

<script src="/assets/utils/index.js"></script>
<script src="/assets/utils/header.js"></script>
<script src="/assets/utils/contactForm.js"></script>
<script src="/assets/utils/loginForm.js"></script>