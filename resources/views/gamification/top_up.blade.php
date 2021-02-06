<!doctype html>
<html lang="en">
  <head>
    <title>Top Up</title>
    @extends("layouts.gamification")
    @section("content")
    <!-- First Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-info">Package 1</div>
                    <div class="card-body text-black">
                        <p class="card-text">1. + 30 active days.</p>
                        <p class="card-text">2. Extra 2 daily tasks.</p>
                        <p class="card-text">3. Bonus point 10%.</p>
                    </div>
                    <div class="card-footer bg-transparent border-info">RM 20.00</div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-info">Package 2</div>
                    <div class="card-body text-black">
                        <p class="card-text">1. + 90 active days.</p>
                        <p class="card-text">2. Extra 7 daily tasks.</p>
                        <p class="card-text">3. Bonus point 30%.</p>
                    </div>
                    <div class="card-footer bg-transparent border-info">RM 50.00</div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-info">Package 3</div>
                    <div class="card-body text-black">
                        <p class="card-text">1. + 365 active days.</p>
                        <p class="card-text">2. Extra 10 daily tasks.</p>
                        <p class="card-text">3. Extra 1 weekly task.</p>
                        <p class="card-text">4. Bonus point 30%.</p>
                    </div>
                    <div class="card-footer bg-transparent border-info">RM 100.00</div>
                </div>
            </div>
        </div>
            <div class="row d-flex justify-content-end">
                <button type="button" class="btn btn-secondary mr-5 mt-3">
                    <a href="/gamification/gamification_profile" class="my-btn-link">Back</a>
                </button>
            </div>
        </div>
        
    </div>
    <!-- End First Container -->

            </div>
        </div>
    </main>
  </body>
</html>
@endsection