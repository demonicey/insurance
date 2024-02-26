
<form method="post" action="/calculate">
    @csrf
    <label for="weight">Weight (kg):</label>
    <input type="number" name="weight" id="weight" required><br>
    <label for="height">Height (m):</label>
    <input type="number" name="height" id="height" step="0.01" required><br>
    <button type="submit">Calculate BMI</button>
</form>

