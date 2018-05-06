@extends('layout')

@section('content')


  <section class="container">
    <div class="columns features">
      <div class="column is-4">
        <div class="card is-shady">
          <div class="card-image has-text-centered">
              <i class="fa fa-paw"></i>
          </div>
          <div class="card-content">
            <div class="content">
              <h4>Tristique senectus et netus et. </h4>
              <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
              <p><a href="#">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-4">
        <div class="card is-shady">
          <div class="card-image has-text-centered">
              <i class="fa fa-empire"></i>
          </div>
          <div class="card-content">
            <div class="content">
              <h4>Tempor orci dapibus ultrices in.</h4>
              <p>Ut venenatis tellus in metus vulputate. Amet consectetur adipiscing elit pellentesque. Sed arcu non odio euismod lacinia at quis risus. Faucibus turpis in eu mi bibendum neque egestas cmonsu songue. Phasellus vestibulum lorem sed risus.</p>
              <p><a href="#">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-4">
        <div class="card is-shady">
          <div class="card-image has-text-centered">
              <i class="fa fa-id-card-o"></i>
          </div>
          <div class="card-content">
            <div class="content">
              <h4> Leo integer malesuada nunc vel risus.  </h4>
              <p>Imperdiet dui accumsan sit amet nulla facilisi morbi. Fusce ut placerat orci nulla pellentesque dignissim enim. Libero id faucibus nisl tincidunt eget nullam. Commodo viverra maecenas accumsan lacus vel facilisis.</p>
              <p><a href="#">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="intro column is-8 is-offset-2">
      <h2 class="title">Perfect for developers or designers!</h2><br>
      <p class="subtitle">Vel fringilla est ullamcorper eget nulla facilisi. Nulla facilisi nullam vehicula ipsum a. Neque egestas congue quisque egestas diam in arcu cursus.</p>
    </div>

    <div class="sandbox">
      <div class="tile is-ancestor">
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Hello World</p>
            <p class="subtitle">What is up?</p>
          </article>
        </div>
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Foo</p>
            <p class="subtitle">Bar</p>
          </article>
        </div>
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Third column</p>
            <p class="subtitle">With some content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>

      <div class="tile is-ancestor">
        <div class="tile is-vertical is-8">
          <div class="tile">
            <div class="tile is-parent is-vertical">
              <article class="tile is-child notification is-white">
                <p class="title">Vertical tiles</p>
                <p class="subtitle">Top box</p>
              </article>
              <article class="tile is-child notification is-white">
                <p class="title">Vertical tiles</p>
                <p class="subtitle">Bottom box</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child notification is-white">
                <p class="title">Middle box</p>
                <p class="subtitle">With an image</p>
                <figure class="image is-4by3">
                  <img src="http://bulma.io/images/placeholders/640x480.png">
                </figure>
              </article>
            </div>
          </div>
          <div class="tile is-parent is-shady">
            <article class="tile is-child notification is-white">
              <p class="title">Wide column</p>
              <p class="subtitle">Aligned with the right column</p>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
              </div>
            </article>
          </div>
        </div>
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <div class="content">
              <p class="title">Contactanos</p>
              <p class="subtitle">No dudes en hacerlo!</p>
              <div class="content">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTeaAyudo%2F&tabs=messages&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=193751147899457" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
            </div>
          </article>
        </div>
      </div>

      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <article class="tile is-child notification is-white">
            <p class="title">Side column</p>
            <p class="subtitle">With some content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
        <div class="tile is-parent is-8 is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Main column</p>
            <p class="subtitle">With some content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
 @stop