import org.junit.jupiter.api.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebElement;
import static org.junit.jupiter.api.Assertions.*;

public class InvalidLoginTest extends BaseTest {

    @Test
    public void testInvalidLogin() {
        // Navegar a la página de inicio de sesión
        driver.get("http://tusitio.com/login");

        // Encontrar los campos del formulario
        WebElement emailField = driver.findElement(By.name("email"));
        WebElement passwordField = driver.findElement(By.name("password"));
        WebElement loginButton = driver.findElement(By.name("login"));

        // Intentar iniciar sesión con credenciales incorrectas
        emailField.sendKeys("usuario@inexistente.com");
        passwordField.sendKeys("ContraseñaIncorrecta");
        loginButton.click();

        // Verificar el mensaje de error
        WebElement errorMessage = driver.findElement(By.id("error_message"));
        assertNotNull(errorMessage);
        assertEquals("Correo o contraseña incorrectos.", errorMessage.getText());
    }
}