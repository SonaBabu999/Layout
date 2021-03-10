<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand" href="Index2.php">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Index2.php">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="Index2.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Index2.php">Action</a></li>
                  <li><a class="dropdown-item" href="Index2.php">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Index2.php">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="Index2.html" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
   <div class="container">
     <div class="row">
     <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="300px" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSExMVFhUXFRUXFRUVFRUXFxcXFxUXFxUVGBcYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy8mICUtLSsvLTUtLS0tLS8tLS0tLS0tLS0tLS0tLS0tLS8tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAAABAEDBQYCBwj/xAA2EAABAwMCBAQFBAEEAwEAAAABAAIRAwQhEjEFQVFhBnGBkRMiMqGxQsHR4fAUI3KSM1LxFf/EABoBAAIDAQEAAAAAAAAAAAAAAAAEAQIDBQb/xAApEQACAgEEAgECBwEAAAAAAAAAAQIRAwQSITEiQVEFExQyYXGBkaFC/9oADAMBAAIRAxEAPwBpjl7rVTGCAe6Qp3I7+xKmtJxC6baPd5dso8kWlyWFzSckyD36Km8vHHBTltQ0jU7OICT4lTDshRFnlvqWJOXBmvuT1U29c6hMnolX0zKctmnHXf8AdMxkjyuXHNM9PrOaTmFXXvCfZO3tIOYHc5ysxlMHnhbp2cacNjpnR2FWmLZr2CXRDjzDuY7LNrXbpOVSGaB8riJyYO/Req95TLZJh3MRg9wQsVLmjbU6LJtjkrhoWu7hpBkie2/qsx1VVXNSXGNiVU4xzVZSJxYVFDdGpBymnXncBZdB0ug7Ky4fmOijcTLEnKmMvrzsUNqpFrldSdlRZLxpIcbVVhrSkoJ2RJBgqykZvHfI/wDFTDLmeayfiL2xxkAbnAU7jOWFM031OiUqlM1rWrTjW2Ae+3moc8AQNvypuyiWzgptL40+4O4TlW+BGpp9Fk1W5XjY9VG6uDR6eMvI6RlcObgpW4fOFRZtGk41OkQNt+avfbOa7bB2O/orSbqzDFhh9za3zYlUdDm88rUZW1JcWk5I2OOqmjS0brOCl7NtbLTyaWFdf6/7Yy8gBI1SrazylXypkLY40Qxw2VvxNJHdKtEqS8hUN3GxuvTbUaWkbgjuJESFwlx4UumuLQzUBkPkAEctzg9l21B8Onl7QmrfxDawT8enjBBMH0ndYZowl2P6HJmxJ7FaPk1WmWuLXAggwQdwULR8R3zKtzVqU2gtcRB6w0CfshINKz0EZNpNo+wUaYd+kgRgA4TlvbQOqspUmtEKWvEp52e2nufRTVo8tkrWtmHEwehWpVcCO6Tc1urKFZzNTjc1yjMHDWzJM9oj3Xm4dAIAAneAnbh/TZZ9dp3V02jh59JJS5IpVC5unAnclJi2AccyOS9aiEncvfgxic9Y7LV5HQnH6fj3qTTZbc1Mwk6zS4LSubcEAgbgbLKuWObvt1VFOmOavR3GmKMaZjmqXOWhQqtA5d+qUqubJ88K263RxsmklCG4imYyFW8oL1WWnspFEueS1kq4Fe7drdMFV1nj+lCfJpkw1HdZIqmcFRVqEmVQXIc9TZjtLmvTFrUAe0nYEH2ykxEA79uivt67RMhCZWceODau741dXzTHpnkss1+RT1C01APBAB364St00NdndTKXwUw4Nz8uvk92zdfpPt/hTFThwiQ+TzGnH5S1v2TFRvNUUuG6HcumcpQxRyJcfBtUmtc0ECMJSk/Q7TqmTsfyq7GsRjfPsmKluHEOjbmFvGW5WjianTPTZXjm7Q13VbhKqbIMSYV4VxGqELhjuQKXqwB+61LmvAjquH8XPfEU3EM2c0c/67JfLPYrOhosbzzUejV4dXFUF7DLZI9lfUZuSdlwfDOL1befhkQd2kSJ69ir73xDXqsLCWtDvq0iCexJJx2CUWpW3ns7MvpkvucPx/098S8QPqNLGjQ075kkdJ5BYylBSspOTtnXx44447YrghCEKpc/QfxQd9lRVI3CgPbBJMJY1+i6dWesxynLjpF7ZVT6yVrXcDBWe691FaRgbPA6tmxUcCJSNetPolBfFuYTFlT1vh7S0OBImRMbqskhLUYI5I17PFVgDZJyqGN1uazEuLWgnlqIE/dX3zfkBGT0Cyaj9OHKWrVImWBRjtivR3l3YNDms2AH4Cyr/wAP1HMLhGR9KxGeJ67WfR8Vrf1EGYiC0uAz5nK7XgHFhc24q6HMmRpd2OCOoPVYX6FV5Paz56OBvZq1nIg6ekmBPVLVeEviTIJzkESu6udAc55AjBnyMyTzhct4l8Rai2nTiObu/QK68RXUaXFGPmc+MYIQxwUEFxmcqB3CtZx54Yste+FWXSvTyCqyNJCspCWXTOKcl0WEdV5eq61TK8OeobFlFnsvVlElwJSpK90qkKtlnHg0Le4c3mew5eyvNUvIndZfxJT1Ci8kQJONlPZVXBmlQAnKKtQ7KH2b25PrByrLWgSc7QYPcRj7go2u6Q4s8HilKauv2HrWiGtlxzuU/a1ARhJgQ2XKy2cM8pTS4PI5fO2y2swgg91Y5qXFSTlM6gpMnaoSuqZc7HLms244bTe75xInY7T6f5lMXd+4PLWjzK9UafMmVjJKQ5BzxpO6MHxfwKi2iKtFjWlsag3Et5mOcYXEBfUuIWHxaZbz/ST7e0L51xbhVS3fodBwDqbMQfMYXP1GPbK0el+m59+Km+RFCFCWOkCEIQB9jdcEiFU+sYlDnAbqio4FdVTO5D6nHjdwV/HmQ4pcOAKurMCppNl0BTLJapDGT6j92O2Ps81HFdK27+JbMqO+oOOk7bEj7hc41gNVrXfSTn+F0ba1F/yxhuByAjEALNxoutJtrnns923FWAEOAwMQIEBcrxWC8wQAGgnzOY+/2WtxCg1uW47LmL2sSStIL2aqDhyfSOBllW1pOa0D5AIj9Tfld9wT6p1jtLSAIXK+ELkU7UlrzqL3SJENI2AEHcQVfZeJy/Wyrpa4fS4TDv4KwqmLrUwhwz1xW4kFsdlxd9Rl/r+y6O4qA/rH4WZxENLcRg8lZs5mpn9x2YjKukkFXsrzsk+JESI6ZXilV5KLOf8A9NDlUrxVYXJi0LSJ3K81apBRZGTC0rfTM4EzBVr6XRN3FPVmMpd/RTYrLS10LDeFf8KN0oZkeaZeCNyhC8otIA/S4HuFu2N+dWpoBmMLAp0y44BPUha9jTcIGkqU+Su3g3f9QDMyJVoL2MDXCGzIPn191n1WPAktK1eLVXFonmBMLaPaFM+1Ql8GfcV5ESqBcu06dUD7x5qmoQoJatHYljxwSp/wNUeIaBBz+VZU40IgNPqs9rgeSXuHQThYynJHQw6DSzVyTb7+DWDm5fueZlXWz2wIj1XOtJT9GqQMGCp3fAstHG6k2bttUzke68cV4RSqNc+IqFmhvzGCJmNJx1ylrOtqw9rXA7yJUeJrK2baVapmm8NhjmOcCXfpbEwQenSSsMlrlnSwbH4x4r9D5c9hBIO4JB8xgqEIXPOmEqVClAH1iskn0qkSAYWy+ydzGPNU1rjQ0t3ELomWeUfkynPPNFm+Hz2VNSrlAUdG2lzeSfwRe1JfPQ4VjbnJHXP8pSrXBwd16DhvzWm5M9VHW4ZxVdmka4LYJXPXZlxVlS5c3CVNQkwq7/gRza+LTjE1eCNH3M+mybrsbqJAhY1Co5hTT7xpG2fOFVuxeWTcuS+4qCIG6e4PYB9N2RqGYPMQneH2VL4eRJIkk59B0S7z8KR0MiOagiGLbyzleKWel8eqS0QVr3ri9xcVn1KaixOcFutDfD7ckag4dIK9vZ82d0hSeQcLQuXwZA5K3oajFPE010Fw6AkCDuvdarKqqPgKEJJWUOC9VqhjKrdW5q2gdZj3UswyY0+TU8PVfnY0j5c+p6rpKdt8xIJkn0XOWVGHBdXYVW4aJJIKEzBxR5q0ajnafVF0J+rlyWvUEBK2Xw9c1BI5Tstoy9iuTDHop4jwFvww5v1RJbKwKtHVECDsQuyvq8gluQuavqxLg1rZKsmYywp9IpdY6ROkx1yqH24dIG5XT2lpUcwAgCRBBP8ACxbu3NOoW7x+CqPk3WNw5iJ3PDC2mTAkNJEc4WdaguhdTWcDSIn9J+4hcrYPLXRyBhZ7qLzxb2mzpeGkMGcnouC8T8YdXqachlMkNb1OxcR1/C7hl1Tp/wC64hrQMkr594ivmV7mpVYIa4iMRMADVHeJS+eQxhRmoQhLG4IQpQB9avr93VZbqhPNFy/KoYDK7XZ5OF1bfJTcTKa4J89QsOflJ9kvVyVXYXBpV2uH/GOodgrPJFUdf6dOSzRNy54dSqCI0vEwQefQjosWtZua2e5B7Ebhbd0wGJIBMxyMjpGVkcQa6njWcnYmVlKNHrtTijFbq/ozH75VzGM9VYbIkSkLkFpVEc+q5GKjSNsqqmfmBKqbcnzXptWSpN98Ks2rbiYbAyQvXEL5j24Mnoslyp0mcI7LxlKSpjfxZ3VbmoY881ZTtatT5mNJAPvHTqp2s1enn0kXcNtQPnO/LsrrmmDn0Wc6s9p0uBBXv/VfLCuuDqYZQxwUF/JXVoiYmO6pfbl2OpjyKm5ei3raf/k4UOhDPDG5NJULsswS4ZkT9jCYsqYYep/yE7TDSC4YkQvNrRBqjUYEGfNZtnIzQ28FttUkyt6iCAHMOR/hXM1ngVSGQRPoeq27atyGCoTFKtmqzjrS2HtIdzjb+lk3t9UzpgDlzK93FZp+oZ6hZ9zV+UhvupsKTN/wlfmrSqNe6XNd2+kgQfeVdXphpkJDg3ATRcKhedRblvKDmO607h0LXHLgh4xuzvNDXVHmAAVz1rW+YOOSZmUzfO10nB22PeRCRawghS2VSt0O3lLLSMN5jvyWb/8An/PvAMH+Vp37ToZyE58gCknV9TsTtjyG3vlZ1bM8kti5PXiTw+ypQcWuOqmwubGxIyQRzkY7L5ovrXDHu0kuMAZk9Oa+YcXrNfXqvZ9Je4iOk7+u/qls8UmTpcrmuhNCELAbBCEIA7yrU3gyht5B2xEJeq2EqXrr3SPPY8cX30ajXjON+vJJ2n/maTyM+y8sq4UNMZWTkd/S4oJxa6RqX1+BJb9WwPMD9RB74Hksn/VExOR0/tRVdKVcSFnJtj+ozSnKxt989v0EgdDBH3WdcVS4yTJVhJK8m37oXBg22VMTQhrdTjACp+EQk79lU5I+UbRkeZ7qk5UgTpHRMhwBGx2zOElfX9OmIBDndBy8yualCyeZ1wW/EUvFHU+Grn4z3B4b8rZHvG3+brsrLTpAGCBBH7r57wW3IaagwZgZ5c/3WxQ4o8EAnyPMHzW+Pc42zt6LM3jX3O/kf8Q24kFo23WJAha9xdufiR+Clbjhjm5mCtRjLjfrkzDTlRTqw7svRBDiHYHQc5VFSIgdVnycbbOMm2x2vfGIC8U7rrn8qbOm0nSc43/hZt6wseW+3koYtnUr3Mdq0f1MPorKF48bk46pW1qnZNOqNa0zkkRCgRa5s0Kd+D9QPple9fxXNptxqMT2Ak/hYFORsn7Gq5rmvG7TI/hDDen2d+KhLB1AE+yUqVjOyus6rK410XidnNkGDzBCrvrR4aS9zWMAlx2xzknZXUlRMoCtFpr1ByYD/wBj/C1nWQJA6bn9lwtx4tDMUAT3IjHrn7K6w4rSqtmpWLerKjz9pwVRZE32Zzk487bOi47ctJbSpnVGXRt2ErNv6Wm3rVS4sLWgscNzU1DQ3uDmR0lZ9bxNbUx/ttc8+Wke5z9li+IfETroMZoFNjJOkHVLjjUTA5fkqk8iqkZwxzlLdJcCV9xevWEVKhI/9RDW+zYBSSEJa7G0kuiEIQgkFKhCAO9cyUhctAwFp/HbEEaT9v6WfWok5XU3Kjj/AIPNintkhWnMwOasc0gwceac4bSbq+YgYMT9z+VF1VaXCMwHBxGcYj1EfdZXZ6DSaZxxqTfuqF2Bsw6R/a81qIG2V4dWg4+bGZnK9fHaRnfmIP2RwNOGOScb5KCF61BUVXnkvLWqtitU6GHEdVdSPskKlwxu5z0GUheX5f8AK2Q37nzWcppE7lHkVqkFxI2kx5TheQhCWFh3h969sMbBBIAnkSeS16jMkLJ4NRLqoPJvzH9vutiu6CSm8DdcnS0k3sdsoFR7SCDsQYPZdVRuDVJmkWw2ckEeS5+kxpcwDeZI8srruHZJ6kD7LajpYL9s5bilB0zGf2Wc23ncrr+ICDnbqkLTh86nH0/lEkVyYVKRm2lvGSr760BEkZAVg2B6H7Ky7P8Atknooa4F9RiWxmP8EL0y3lQCQYhaFGjgbrI4ckI0bYl0LYteGKylRDYO5XKeJw8V3BxJBDS3/jyEDoZUTlSKwwutzGfEdJtvVY6g8teQS/Q6IyI22nOOyzL3itesNNWtUeOjnEj2SSEs2aEoUKVAAoUoQBClCEAQhSoQAIQhAH0SKRbJOSM+fNKPLQMHHP8AlUw0Tv8Awly0kwMp67O9qMLl2hu7pEDUNoH3We0/ddBSotp0h8QyTy6dPys3iTWlmoCDKmiv4WvJfAq2nJARVY3+14pSvNZqvVImGFRXPJ4q6N9j0SVR5OxgdOq9Vt1EpeTF5pP0J1mapdORy6pZMXYj1S6Wl2c3J+YJQhCgobnhgA/EHOGn0ytR1vuuVtLp1JwewwR7Ecwey27PxHJiq0Qf1MBx5ichMYsiSpjWHMorax+waGVA47HHlK2n03jLCs80Q9uppDgdiNldw+qR8hOR9Odx0TKY7DLtVIftWmq5tI851GOUJ66tW0xpHTb8LHqXj6ThUBEt6/he6/i5jxmk7V2LY99/sovkvDVV+ZmJe1nsq6YEHPmJMrQfc0RTySTH0wd/wse5rmo/WfQdB0VlKnOVS2KPNJuVez1a08ZRxC7qgaKNN3epE/8AUJumwlOWoHWfRQ42YrFZVSuaNFgdUqDaQD9R8m7yuN4rfGtVdUIiYgdAMALQ8WVAarWCPlbnsXGY9oWGl8km+CmbI5ePwShCFmYghCEACEIQAIQhAAhChAEh3YKV5UoA66J/dW03BuRul2Ehe9UpyJ6xL5LS4uydlPEXgj5dgFbd0tDQP8lZld+IVrCcdq5KhVPVeHvleXLyXKHISbK3FVOdKsWfcuOpYTYhmntR7vDkeSXQULJiMnbsEIQoKghCEAWUbh7PpcW+RInz6rp7DiTa4iNNQCYGxjmCuUTfCrv4VVruUw7/AInB/n0WmObizTHNxf6HS3L6jhkY6rPA95W/cUgdj7d1niz05PXCd7Q5kh7RFswAj7rRrW4IkCEkKcGea27WtTLQHSD0iVWiIuNVIzGUXlc1xDi9eXM+iCQQ3fG41fwtLiHid7XuYymBpLmnVkyDEwFzVWoXOLnGSSST1J3S2SafQvkyXxE8oQoWJgShQpQAIQhAAhChAEoUKUAChSoQBKFCEAdbC90hmFW5/QIomZJ5Jw9dasf4l9DTO4WHUctSo4OZE7LKqjKq2U1T9nmV5KhBRYg2L3DolZ60LypAWesJ9nK1D8qBCEKhgCEIQAIQhAAhCEAdz4Vt/iW7JMwXDyg7eUQtO+t+y5Hwv4h/0uprmlzHZ+WJDtue8iPZa1fxlSIOmk/Vy1aY9SCmoZUo8jscsdiQ9StSeSqv76nbgucQXx8tMGTPKeg7rjL3iNWqZe8noBgDyASqrLO/QtLJfR6q1C4lx3JJPmTJXlCEuZgoUoQBClCEACEIQBCFKEAQpQhAAoUoQBCEKUAdaSdlW/aBuhCckevyFLXkKmo6UIWYpOTqishQUIUi0ii6oy2emVmqULGfZzNQvIEIQqC4IQhAAhCEACEIQAIQhAAhCEACEIQAIQhAAhCEACEIQAIQhAAoUoQBCFKEACEIQB//2Q==" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img height="300px" src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img height="300px" src="https://i.pinimg.com/originals/a4/f8/f9/a4f8f91b31d2c63a015ed34ae8c13bbd.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
     </div>
       <div class="row">
        <div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">
      
           <table class="table table-borderless">
               <tr>
                   <td>Username</td>
                   <td><input type="text" class="form-control"></td>
               </tr>
               <tr>
                   <td>Password</td>
                   <td><input type="text" class="form-control"></td>
               </tr>
               <tr>
                   <td></td>
                   <td><button class="btn-success">SUBMIT</button></td>
               </tr>
           </table>
</div>
<div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">
           <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div>

          
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>
</html>
