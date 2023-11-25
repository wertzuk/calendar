import { ref } from 'vue';
const API_URL = 'http://localhost:8000/api';

export function useTournaments() {
  const data = ref(null);
  const error = ref(null);

  fetch(`${API_URL}/tournaments?sort=desc`)
    .then((res) => res.json())
    .then((json) => (data.value = json))
    .catch((err) => (error.value = err));

  return { data, error };
}
