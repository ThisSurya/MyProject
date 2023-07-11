<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Tabungin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?= link_tag('css/style.css') ?>
  </head>

  <body>
    <div class="wrapper">
      <div class="sidebar">
        <ul>
          <li>
            <div class="img1">
              <img
                src="data:image/png;base64,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" />
            </div>
            <div class="p1"><a href="#">TABUNGIN</a></div>
          </li>
          <li class="hover1">
            <div class="img1">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACIklEQVR4nO3Yz4tNYRzH8cMIIaUoiZSmZilJUlKslJ3NLCw1/gSzYWfhX6BspNiwYkEhPyIWZGEnERGhRPntpeN+rznNjHufmXvOuDfPu27dOt8fn8/zfc5zTqcoMt3BelzF5fJ/MYhgJ16Z4A12F4MC5uEQvoeB8/Er+YHDZUzRz2A5zobonziK+WFuvGLuAlYU/Qg24lEIfTvdNpq03Z5iS9FPYB8+hsB72NAhdh3uROwn7K9cm5a5MLAgtk+bk1iSkLcIxyt5x7DwnxjBWtyOXp8xNosaY5GrUkvlerNGsAMvo88zbO2h1iY8nm4CmjISp89BfIseF7Gyhroro1ab8ej1m3rU//1oPYKhGusPRc2ydsm52o1gBA+j7nvsra341F578O7PbOoyglF8iJoPMFxL4c49h6NXm9E6j9ZTWFqr4s79F+PE5CN6pkVWxRuruLHHG1PcXcsBfAktN7AmNXE7XkTic2xrXG13TZvxJDS9xq4U918j4RpWF32C1hF9qbpLprxFYxlOV0+K8h4p+gyt+7bKmVJ7NeBu5Wit/yFUIyZoa71VvXgT9+N5MShGRuJN+0rHwKJPkaovG5kj5In8bxMxS7KRbjS+UnPVRzbSIk8kEakLlhzYY17jfWQjLfJEEpG6YMmBPeY13kc20iJPJBGpC5Yc2GNe431kIy3yRBKRumDJgT3mNd7HgFAkGCk/3fc712c6yUymmB2/APGYfQ3V1oZnAAAAAElFTkSuQmCC" />
            </div>
            <div class="p1"><a href="#">Home</a></div>
          </li>
          <li class="hover1">
            <div class="img1">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAACXBIWXMAAAsTAAALEwEAmpwYAAACBUlEQVR4nO2XTWobQRBGO9kaRA4QW0tdwVcIOYL39iW88CaQre+QH+QYe+OdD6Ez2DK2CHFQtAne5IVCDYHO/HRF06PKuB4IBGpq5vXX1d0KwXEcx3EcRwGwC5wDq/i5BCZhwLKP/M13+S0MDdbJ1nEWhgbrJVzHDws99gB8BvY6qLsDPDUIL7sx6KbHvgGvN6w7o5lpMNZjH/6x5n5cKU1sNKGleuwrMFLWOwB+VtS6ARbSt5Js77LAC+CQdmS5H7eJAy+Bd8CvihoX0s/92SUAY+AaHZLMe+BVzeYkUlWcymSEbcCfVJuWcU7iJ8CX+H0Rl2uKLOuDrYhmpCoTcCXHRNxMplGqavfOQTas/bClc3UZZepSlUkY19QZxf7ViM96vTJSf66myAQcyTLPqJkr/tT75kTzudqaaoa4HFWmbk6rFtmsVBvqf7R2c1qVTEAuDHFjy7o5AW+Bu4rxc+DNpu8T4p/rognEfeITcN92c4piddx28TKT+Oc6K4HS0ELoMIGzOPvbubv2KayhdI9ZFJ6X7DGLwo1Yr2/uhf57YZQ9PwThuabnhyBcdHxxtC9Uerya0j1mUXhesscsCjdifbwaawIunKCPNEH7AGvj1VgTcOEEfaQJ2gdYG6/GmoALJ+gjTdA+wNp4NdYEXDhBH2mC9gHWxqt5dsKO4ziO44RS/AYT0wRT1HT/FQAAAABJRU5ErkJggg==" />
            </div>
            <div class="p1"><a href="#">Stats</a></div>
          </li>
          <li class="hover1">
            <div class="img1">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFCklEQVR4nO2aW4hWVRTHj5dPo5mmbNKiKTMzLyNhETOaQg8FPRT40E2CAqPe6sFISMyCsItZ42XsqctLEgU9dIEoku5kL00GFlh0H0uCIB0nZ3LUXyz9b9ocz9n7nPOdKaf8wzAf31p7XfY5a+211v6S5CT+BwAeBw5zPEaAlclYAdBPPj5LxgKANuAIMARM8L4/Td8PAxOTEx3AorydB34Qbe6/Y11y1IgLgHuAqRG+22XsCxm010W7KSJjKrACOL8O233BFwO7ZcSvwHUB3ifEd38G7VHRHgqsvxr4WXwWa7PqcmKW58Re/bd3fQMwOcXbAN4Vz/UZsm4R7U0/fkSbpE0w2YZ9njMX1enE+wrYVcBBffc50AnMBJ4CfvOy03E7abHh0ffI8A5gDtDnpejVShofNu0McF7KiRaP1gV8LdqQlBsOAe8BtwXk3gl84u28ZbFBff4WWOjxtqac6ajiiAvaA8CZGXRT8px49gPrgLNLJo8tcsTwvD2FDL522WBYXsWRFuArCXgywLfAlJVW8Pf6Dv8ppAH0yIZd/ltRCsDligcrN65K/mEAV0r3SMjZosIe1I7sznrFRgvAGcCP0r2mDoETge0S+HItVhbT+6J0fpxO1c2mYRdwl9UiNKxviZdEZtYpeI5S6wAwpQD/fGAj8IVS66A+23fzC6yfrtg8UCYTFnHkGe3Q2gjfJKVUczoPRus13oisp8X/cF1OnKJy4WAozcqJbd4huQnoVhq3v4XAZu/c2BZyBpgtPgv48VUMPx24Qiew1VMfSeBbkXX2JAw/AZdEzh3XePVGZO4Q39vAeh3S3VkHp79oXaCzs3LixkhMHNKTyHUi5cyw1nQG+O4KvKK2YY9lLXI99h/ApyoZrEBcasEXMcyC2LAx5oS3xuLEsKFAC3GDtQVKyTu0YYbDWQscSuds4Eut7SqxxmLGsLPi2XYUWUSHcRUEW743tJZYY0WnYaCCvnHO2LodGajgiPUbhn2j5UhbE69Wd4UhRZVXqy3kyIiXoazBedUOQBsUxLozL9g3lzDGpeueCN9cYBnwCPAa8J3XlI1kLVhpIxzvwPJhC28ukH5t7YICTlwK/Fkg/d5NNoZl672xjNDp7cI7BQ9El077Q87ICddCbyp4IL7hvR3zKg34VKLsVYlyVoCv4ZUow3JskbJTq6qFLXoSiLcxaiVKMwWc6q3eSNE4ojqsUVDn2qQuaHfKlvFWp+3UGbNfn3tCMeFgE0avjJ+W1AUZ5sqCaC1Vg77F0mV9zOy6hE7WIM7wbC1Ci+ndKp19sd6lqEB7nw3f2KSxFiuL6W31hoDrmxV2jc6Q5scx1fR3KVbMhmurCpmm+azhvoiy3LRccEC3OEBfLRt+iV1p5AmwuxDD7zmjzCneyGZQ94bnlJA/Q4NvV0m8lJURVVe5W4AVVRyZ7nWMH/iVre4w+r1GzB9i28D71oDcOzKG2K4N6DfZqTgx3a4jrHbxY8Viypl2nQWum9wungt1ELprBTNyRs58zGGP+vBzJcMNAd3dS3vKiabvSHxn3FliAbgm47Km4SlfmiHLaiU3TEivnQA84N29DNV20ZO6Avhegq3EXxLgtd00rMqgWeEXLDs4ljx21X71lsouy4FTI3w2RjJszaC9ItqyiIwWjX7KX+yMQnnRl0GzpsgwLznRwbEB3xFls/Fj9gcDBq9xGrs/4fCmlnk/qslvT08i+e/gLx6eFfRUEBkkAAAAAElFTkSuQmCC" />
            </div>
            <div class="p1"><a href="#">Setting</a></div>
          </li>
          <li class="hover1">
            <div class="img1">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNUlEQVR4nO3aO05DMRBGYUNBiwQtG0FZGG0aXjvJCmgQC6AIUNDR5rKNE01kikjJlSfRDf+MfHpL88nJfckFuACegV90GoBHm620Bjyh24MHYnrrtogEzOpMg2fRpiIW3rk6ZOLoOyIWfUfEAu5SXLUsYF4yQFx1yIQBC+AFuAz90wKWdaz3Zowo5Ab4qaMZ6iok5CCMKmQH5mMUowxxYdQhezDXJSKkCRMFsgPzuYWJBBnFRIPsxRwDAc6AL/6/5bGQ8/rHiw1J89OSugwTCMLYvSQKhAw3RFqet9QhtD7OK0PwvJOoQsjwYkWWV13gO8vHhzfgNfznoIPqkBNEho/YwNw1lzBk03QLThTeuTpk4ug7kmBHhrpmVvQO1aw8i+xclGr3HogdPDPM384otDKE5+DZGhon/IxufD43AAAAAElFTkSuQmCC" />
            </div>
            <div class="p1"><a href="#">Logout</a></div>
          </li>
        </ul>
      </div>
      <div class="main_content">
        <div class="header">
          <div class="imgp">
            <img src="image/profile.png" />
            <!-- div p2 -->
          </div>
          <div class="p2">
            <p>NAMA PENGGUNA</p>
            <p>akunpengguna@gmail.com</p>
          </div>
        </div>
        <div class="info">
          <div>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed
            nobis ut exercitationem atque accusamus sit natus officiis totam
            blanditiis at eum nemo, nulla et quae eius culpa eveniet
            voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio
            perferendis itaque alias sint, beatae non maiores magnam ad, veniam
            tenetur atque ea exercitationem earum eveniet totam ipsam magni
            tempora aliquid ullam possimus? Tempora nobis facere porro,
            praesentium magnam provident accusamus temporibus! Repellendus harum
            veritatis itaque molestias repudiandae ea corporis maiores non
            obcaecati libero, unde ipsum consequuntur aut consectetur culpa
            magni omnis vero odio suscipit vitae dolor quod dignissimos
            perferendis eos? Consequuntur!
          </div>
          <div>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed
            nobis ut exercitationem atque accusamus sit natus officiis totam
            blanditiis at eum nemo, nulla et quae eius culpa eveniet
            voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio
            perferendis itaque alias sint, beatae non maiores magnam ad, veniam
            tenetur atque ea exercitationem earum eveniet totam ipsam magni
            tempora aliquid ullam possimus? Tempora nobis facere porro,
            praesentium magnam provident accusamus temporibus! Repellendus harum
            veritatis itaque molestias repudiandae ea corporis maiores non
            obcaecati libero, unde ipsum consequuntur aut consectetur culpa
            magni omnis vero odio suscipit vitae dolor quod dignissimos
            perferendis eos? Consequuntur!
          </div>
          <div>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed
            nobis ut exercitationem atque accusamus sit natus officiis totam
            blanditiis at eum nemo, nulla et quae eius culpa eveniet
            voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio
            perferendis itaque alias sint, beatae non maiores magnam ad, veniam
            tenetur atque ea exercitationem earum eveniet totam ipsam magni
            tempora aliquid ullam possimus? Tempora nobis facere porro,
            praesentium magnam provident accusamus temporibus! Repellendus harum
            veritatis itaque molestias repudiandae ea corporis maiores non
            obcaecati libero, unde ipsum consequuntur aut consectetur culpa
            magni omnis vero odio suscipit vitae dolor quod dignissimos
            perferendis eos? Consequuntur!
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
