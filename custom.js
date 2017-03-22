function lalala(){
    $('.ui.form')
        .form({
          fields: {
            username: {
              identifier  : 'username',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your username'
                },
                {
                  type   : 'username',
                  prompt : 'Please enter a valid username'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    $('.ui.form2')
        .form({
          fields: {
            nama: {
              identifier  : 'nama',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Nama Anda'
                }
              ]
            },
            username: {
              identifier  : 'username',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Username Anda'
                }

              ]
            },
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'email',
                  prompt : 'Masukkan Email Dengan Benar'
                },
                {
                  type   : 'empty',
                  prompt : 'Isikan Email Anda'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Password Anda'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Masukkan Password Minimal 6 Karakter'
                }
              ]
            },
            alamat: {
              identifier  : 'alamat',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Alamat Anda'
                }
              ]
            },
            umur: {
              identifier  : 'umur',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Umur Anda'
                },
                {
                  type   : 'number',
                  prompt : 'Isikan Umur Anda Dengan Benar'
                }
              ]
            },
            hobi: {
              identifier  : 'hobi',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Hobi Anda'
                },
                {
                  type   : 'empty',
                  prompt : 'Isikan Hobi Anda'
                }
              ]
            },
            agama: {
              identifier  : 'agama',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Pilih Agama Anda'
                }
              ]
            },
            status: {
              identifier  : 'status',
              rules: [                
                {
                  type   : 'empty',
                  prompt : 'Pilih Status Anda'
                }
              ]
            },

            
            
          }
        })
      ;
    })
  ;
      $('.ui.dropdown')
  .dropdown()
;  
}
