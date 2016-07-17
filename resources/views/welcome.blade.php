@extends('layouts.app')

@section('content')

<main id="main" class="main" role="main">
    <div class="section section-hero">
      <div class="container type--center">
        <h1 class="giga type--thin type--white">SHPE CSUN</h1>
        <a href="#" class="btn btn-default-outline btn-lg h3">Find Out More</a>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-push-4">
            <h3 class="type-header">Our Vision</h3>
            <p class="emphasis">Metaphor is a user interface kit (UI Kit) that ensures web applications maintain consistency with CSUN branding and identity standards. Metaphor was built specifically to improve the mobile user experience and assure compliance with ADA guidelines on all platforms. It will also extend the current utility of the Web-One guidelines to incorporate web-applications.</p>
            <br>

            <h3 class="type-header">Get Started</h3>
            <p>To include Metaphor in your next project simply run the following command:</p>
            <pre class="prettyprint lang-bash prettyprinted" style="padding: 20px; border-radius: 3px;"><code><span class="pln">$ bower install metaphor </span><span class="pun">--</span><span class="pln">save</span></code><br></pre>
            <br>

            <h3 class="type-header">Features</h3>
            <p>Metaphor gives you a comprehensive collection of HTML, CSS, and JS components which are simple to use, easy to customize and extendable.</p>
            <p>For developers, Metaphor provides the flexibility to code in any programming language of choice and streamlines the process by providing reusable UI components. This allows developers to focus on functionality while ensuring their application adheres to compliance and branding guidelines.</p>
            <br>

            <h3 class="type-header">Open Source</h3>
            <p>Metaphor is a completely open source to encourage campus collaboration. Metaphor uses the MIT License. Interested in contributing or learning more? <a href="https://github.com/alexhernandez/metaphor.git">Check out Metaphor on <i class="fa fa-github" aria-hidden="true"></i> Github.</a></p>
          </div>
          <div class="col-sm-4 col-sm-pull-8">
            <blockquote>"An elegantly crafted UI Kit for CSUN branded prototypes &amp; applications."</blockquote>
            <br><br>
            <p>Interested in contributing or learning more?<br><a href="https://github.com/alexhernandez/metaphor.git">Check out Metaphor on <i class="fa fa-github" aria-hidden="true"></i> Github.</a></p>
          </div>
        </div>
        <br><br>
      </div>
    </div>
  </main>

@endsection
